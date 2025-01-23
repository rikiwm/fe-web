<?php

namespace App\Livewire\Forms;

use App\Events\UserLoginNotif;
use App\Notifications\Logger;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    #[Validate('boolean')]
    public bool $remember = false;

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate(): void
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::attempt($this->only(['email', 'password']), $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'form.email' => trans('auth.failed'),
            ]);
        }
        $this->lastLoginActivity();
        RateLimiter::clear($this->throttleKey());


    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'form.email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }

    protected function lastLoginActivity(): void
    {
        $cs = auth()->user()->where('id', 1)->first();  //si_admin
        $currentIp = request()->ip();
        $currentAgent = request()->header('User-Agent');
        $lastLoginDetails = null;
        $lastLogin = DB::table('sessions')->where('user_id', auth()->user()->id)->first();
        if ($lastLogin && ($lastLogin->ip_address !== request()->ip() || $lastLogin->user_agent !== request()->header('User-Agent'))) {
            $lastLoginDetails = [
                'before' => 'IP: ' . $lastLogin->ip_address . ', Device: ' . $lastLogin->user_agent,
                'after' => 'IP: ' . $currentIp . ', Device: ' . $currentAgent,
            ];
        }
        ;
        // $executionTime = Benchmark::value(function () use ($lastLogin) {
        //     return $lastLogin;
        // });

        $listenLoginData = [
            'message_data' => $lastLoginDetails,
            'time_request' => now(),
            'responTime' =>  Benchmark::value(fn () => $lastLogin, 0),
        ];
        $cs->notify(new Logger($listenLoginData));

    }
}

<?php

namespace App\Events;

use App\Notifications\Logger;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Session;
use Illuminate\Session\Middleware\AuthenticateSession ;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class UserLoginNotif implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    // public $userId;
    // public $userName;
    // public $loginTime;

    public function __construct()
    {
        // $this->userId = $userId;
        // $this->userName = $userName;
        // $this->loginTime = $loginTime;
    }

    public function broadcastOn()
    {
        return [
            // new Channel('user-login'),
            // new Channel('user-ntf'),

        ];
    }

    public function broadcastAs()
    {
        return 'user.login';
    }


    // /**
    //  * Get the data to broadcast.
    //  *
    //  * @return array
    //  */
    public function broadcastWith(): array
    {

        return [

        ];

        // $lastLogin = DB::table('sessions')->where('user_id', auth()->user()->id)->first();
        // if ($lastLogin && ($lastLogin->ip_address !== request()->ip() || $lastLogin->user_agent !== request()->header('User-Agent'))) {
        //     dd($lastLogin);
        // }
        // $notifications = auth()->user()->notifications->where('read_at', null)->count();

        // $boardcastData = [
        // 'message' => $notifications,
        // 'ip' => request()->ip(),
        // 'user_agent' => request()->header('User-Agent'),
        // ];
        // $user = auth()->user()->notify(new Logger($boardcastData));
        // return $boardcastData;
    }
}

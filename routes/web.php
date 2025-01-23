<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('panel/documentations', 'panel/documentations')
    ->middleware(['auth', 'verified'])
    ->name('documentations');

require __DIR__.'/auth.php';

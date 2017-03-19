<?php

use Illuminate\Foundation\Inspiring;
use App\User;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command(
    'create:user {email} {name} {username} {password}',
    function ($email, $name, $username, $password) {
        User::create(
            [
                'email'    => $email,
                'name'     => $name,
                'username' => $username,
                'password' => bcrypt($password),
            ]
        );
    }
)->describe('Create a new user');
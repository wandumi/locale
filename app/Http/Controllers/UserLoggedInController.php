<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\UserLoggedin;

class UserLoggedInController extends Controller
{
    public function LoggedNotification()
    {
        $user = User::first();

        $userLoggedIn = [
            'body'              => 'You have logged on Growmytree Plartform',
            'userLoggedInText'  => 'Welcome at Growmytree',
            'url'               => url('/'),
            'thankyou'          => 'Hope you will plant more trees'
        ];

        $user->notify( new UserLoggedin($userLoggedIn) );

    }
}

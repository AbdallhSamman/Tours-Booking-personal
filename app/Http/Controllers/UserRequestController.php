<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Notifications\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class UserRequestController extends Controller
{
    //
    public function sendTestNotification(){
        $user = User::all();
        $requestData = [
            'body' => 'You recieved an new test notification',
            'RequestText' => 'You had a trip request',
            'url' => '/',
            'thankyou' => 'you have 1 day to accept'



        ];

        // $user->notify(new UserRequest($requestData));
        Notification::send($user, new UserRequest($requestData));
    }

}

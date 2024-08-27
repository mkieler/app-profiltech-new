<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function googleOAuth2Callback(){
        $userInfo = Socialite::driver('google')->stateless()->user();
        User::updateOrCreate(['email' => $userInfo->email], ['name' => $userInfo->name, 'password' => ''])->login();
        return back();
    }
}

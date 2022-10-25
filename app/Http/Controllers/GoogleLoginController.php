<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;

class GoogleLoginController extends Controller
{
    public function redirect(){
        // dd('d');
        return Socialite::driver('google')->redirect();
    }

    public function callback(){
        $user = Socialite::driver('google')->user();
        dd($user);
    }
}

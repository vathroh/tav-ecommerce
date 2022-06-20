<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\Contact_people_logins;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        
        $user = Socialite::driver('google')->user();
        $findUser = Contact_people_logins::where('google_id', $user->id)->first();
        // dd($user);
        if($findUser){
            return redirect()->intended('/');
        }else{
            $newUser = Contact_people_logins::create([
                'contact_people_id' => 1,
                'google_id' => $user->id,
                'username' => $user->email,
                'email' => $user->email,
                'remember_token' => $user->token
            ]);

            return redirect()->intended('/');
            
            
        }

        
    }

}

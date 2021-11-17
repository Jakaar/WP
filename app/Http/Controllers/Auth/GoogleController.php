<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\User;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
//            $finduser = User::where('google_id', $user->id)->first();
//            $finduser = DB::table('users')->where('email', $user->email)->first();
            $finduser = User::where('email', $user->email)->first();
//                dd($finduser['email']);

            if($finduser){
                Auth::login($finduser);
                return redirect('/cms');
            }else{
                $msg = ['msg'=>'You not have a access'];
                return redirect('/login')->withErrors($msg);
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

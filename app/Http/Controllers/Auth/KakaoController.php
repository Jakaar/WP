<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\User;

class KakaoController extends Controller
{


    public function check(){
        try {
            $user = Socialite::driver('kakao')->user();
            $finduser = User::where('email', $user->email)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/cms');
            }else{
                $newUser = User::create([
                    'email' => $user->email,
                    'avatar'=> $user->avatar,
                ]);
                Auth::login($newUser);
                return redirect('/cms');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function store(Request $request){
        try {
            $findUser = User::where('email',$request->email)->first();
            if (isset($findUser)){
//                dd('dd');
                Auth::login($findUser);
                return response()->json(['msg'=>__('success')], 200);
            }else{
                $msg = ['msg'=> __('You not have a access')];
                return response()->json($msg, 401);
            }
        }catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}

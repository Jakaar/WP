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
                return redirect('/');
            }else{
                $newUser = User::create([
                    'email' => $user->email,
                    'avatar'=> $user->avatar,
                    'user_type'=> 'customer',
                    'isEnabled'=> 1,
                ]);
                Auth::login($newUser);
                return redirect('/');
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
                $newUser = User::create([
                    'email' => $request->email,
                    'sex'=> $request->gender,
                    'user_type'=> 'customer',
//                    'avatar'=> $request->profile->profile_image_url,
                    'isEnabled'=> 1,
                ]);
//                dd($newUser);
                Auth::login($newUser);
                return response()->json(['msg'=>__('success')], 200);
            }
        }catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}

<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PasswordResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ResetRequest(Request $request)
    {

        $token = Str::random(6);
        $user = User::where('email',$request->email)->first();
        $password_reset = DB::table('wpanel_password_reset')->where('email',$user->email)->count();
        if($password_reset == 0){
            \DB::table('wpanel_password_reset')->insert(['email'=>$request->email,'token'=>$token]);
        }
        else{
            \DB::table('wpanel_password_reset')->where('email',$request->email)->update(['token'=>$token]);
        }
        $maildetails = [
            'subject' => 'Testing Application OTP',
            'body' => 'One-time authorization code is : '. $token
        ];
        DB::table('users')->where('email',$request->email)->update(['password'=>bcrypt('Az%%6589%')]);
        Mail::to($request->email)->send(new sendEmail($maildetails));
//        if($user){
//
//            return response(["status" => 200, "message" => "OTP sent successfully"]);
//        }else{
//            return response(["status" => 401, 'message' => 'Invalid']);
//        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validateToken(Request $request)
    {
        $user = User::where('email','=',$request->email);
//        $user = DB::table('wpanel_password_reset')->where(['email','=',$request->email],['token','=',$request->token]);
        if($user){
////            Auth::login($user);
//            auth()->login($user, true);
            DB::table('wpanel_password_reset')->where('email', $request->email)->delete();

            return redirect('/login');
//            return response(["status" => 200, "message" => "Success"]);
        }
        else{
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checker(Request $request){
        $data = DB::table('wpanel_password_reset')->where('token', $request->token)->where('email',$request->email )->count();
        if($data == 1){
            return response()->json(['msg' => true ]);
        }
        else{
            return response()->json(['msg' => false ]);
        }
    }

    public function updatePassword(Request $request)
    {
        try {
            $updated = DB::table('users')->where('email', $request->email);
                Hash::make($request->password);
                $updated->update([
                    'password' => bcrypt($request->password),
                ]);
        } catch (\Exception $e) {
            return response()->json(['icon' => 'error', 'msg'=> __('error')]);
        }
    }
}

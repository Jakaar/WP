<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Hash; 

class MemberController extends Controller
{
    public function update(Request $request)
    {
        try{
            $model = \App\User::find($request->user_id);
            $model->firstname = $request->firstname;
            $model->lastname = $request->lastname;
            $model->email = $request->email;
            if($request->hasFile('avatar')){
                $model->avatar = $request->file('avatar')->store('avatar','public');
            }
            if($request->has('password')){
                $model->password = Hash::make($request->password);
            }
            $model->save();
            return response()->json(['icon' => 'success','msg' => 'success'], 200);
        }catch(\Exception $e){
            return $e;
        }
    }

    public function delete(Request $request){
        $model = DB::table('users')->where('id',$request->user_id);
        $model->delete();
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }

    public function singleUserData(Request $request){
        $data = DB::table('users')->where('id',$request->id)->first();
        return response()->json(['msg' => 'success', 'data' => $data ], 200);
    }
    public function create(Request $request){

        DB::table('users')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['msg' => 'success'], 200);

    }
}

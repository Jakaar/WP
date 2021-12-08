<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Customer;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class CustomerController extends Controller
{
    public function create(Request $request)
    {

        $user = new \App\User;
        
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->birthdate= $request->birthdate;
        $user->user_type= $request->user_type;
        $user->password = Hash::make($request->password);
        $user->isEnabled = 1;
        $user->save();

        return response()->json(['icon'=> 'success', 'msg' => 'success'], 200);
    }
    public function delete(Request $request)
    {
        DB::table('users')->where('id', $request->user_id)->update([
            'isEnabled' => 0,
            'deleted_at' => now()->format('Y-m-d h:i:s'),
            'reason' => $request->reason
        ]);
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }

    public function member_update(Request $request)
    {
        try{
            $user =\App\User::find($request->id);
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->birthdate= $request->birthdate;
            $user->user_type= $request->user_type;
            if($request->password != null){
                $user->password = Hash::make($request->password);
            }
            $user->save();

            return response()->json(['icon' => 'success', 'msg' => 'success'], 200);
        } catch (\Exception $e){
            return $e;
        }
    }
}

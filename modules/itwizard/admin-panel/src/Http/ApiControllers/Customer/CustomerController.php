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
        $user->save();

        return response()->json(['icon'=> 'success', 'msg' => 'success'], 200);
    }
    public function delete(Request $request)
    {
        // $model = \App\User::where('id', $request->user_id);
        // $model->delete();
        DB::table('users')->where('id', $request->user_id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }
}

<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Hash;
use Carbon\Carbon;

class MemberController extends Controller
{
    public function update(Request $request)
    {
        try {

            $model = \App\User::find($request->user_id);

            $model->firstname = $request->firstname;
            $model->lastname = $request->lastname;
            $model->email = $request->email;

            if ($request->hasFile('avatar')) {
                $model->avatar = $request->file('avatar')->store('avatar', 'public');
            }
            if ($request->input('password') != null) {
                $model->password = Hash::make($request->password);
            }
            $model->save();
            return response()->json(['icon' => 'success', 'msg' => 'success'], 200);
        } catch (\Exception $e) {
            return $e;
        }
    }
    //

    public function delete(Request $request)
    {
        // $model = \App\User::where('id', $request->user_id);
        // $model->delete();

        DB::table('users')->where('id', $request->user_id)->update([
            'isEnabled' => 0,
            'reason' => $request->reason,
            'deleted_at' => now()->format('y-m-d h:i:s')
        ]);
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }

    public function singleUserData(Request $request)
    {
        $data = DB::table('users')->where('id', $request->id)->first();
        return response()->json(['msg' => 'success', 'data' => $data], 200);
    }
    public function getPermission(Request $request)
    {
        $data = \App\Models\Permission::where('id', $request->id)->first();
        return response()->json(['msg' => 'success', 'data' => $data], 200);
    }

    public function permissionSettingsUpdate(Request $request)
    {
        $model = \App\Models\Permission::find($request->id);
        $model->name = $request->name;
        $model->display_name = $request->display_name;
        $model->description = $request->description;
        $model->save();

        return response()->json(['msg' => 'success'], 200);
    }

    public function permissionSettingsCreate(Request $request)
    {
        $model = new \App\Models\Permission;
        $model->name = $request->name;
        $model->display_name = $request->display_name;
        $model->description = $request->description;
        $model->save();

        return response()->json(['msg' => 'success'], 200);
    }

    public function permissionSettingsDelete(Request $request)
    {
        $model = \App\Models\Permission::where('id', $request->id);
        $model->delete();
        return response()->json(['msg' => 'success'], 200);
    }

    public function create(Request $request)
    {
        $user_email = \App\User::where('email',$request->email)->count();

        if($user_email > 0)
        {
          return response()->json(['icon' => 'error', 'msg' => 'This email already registered']);
        }
        else
        {
            $user = new \App\User;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->isEnabled = 1;
            $user->save();
            $user->attachRole('admin');
    
            return response()->json(['success' => true,'icon' => 'success', 'msg' => 'success'], 200);
        }
    }
}

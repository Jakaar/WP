<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Users;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request){

        try{
            $model = new \App\Models\Role;
            $model->name = $request->role_name;
            $model->display_name = $request->display_name;
            $model->description = $request->description;
            $model->save();

            $permission = \App\Models\Permission::whereIn('id',$request->permission)->get();

            $model->syncPermissions($permission);

            return response()->json(['icon' => 'success', 'msg' => 'success']);

        }catch(\Exception $e){
            return response()->json(['icon' => 'error','msg' => $e->errorInfo]);
        }

        
    }

    public function permissionDelete(Request $request){
        try{
            $role_id = $request->role_id;
            $model = \App\Models\Role::where('id',$role_id);
            $model->delete();

            return response()->json(['icon' => 'success', 'msg' => 'success'],200);

        }catch(\Exception $e){
            return response()->json(['icon' => 'error', 'msg' => $e->errorInfo]);
        }
        
    }
    
    public function roleSingle(Request $request){
        $data = \App\Models\Role::with('permissions')->where('id', $request->role_id)->first();
        return response()->json(['msg' => 'success', 'data' => $data], 200);
    }

    public function roleRemove(Request $request){
        try{
            
            $role = \App\Models\Role::where('id',$request->role_id)->first();
            $user = \App\User::where('id',$request->user_id)->whereRoleIs($role->name)->first();
            $user->detachRole($role);
            return response()->json([ 'icon' => 'success', 'msg' => 'success'], 200);

        }catch(\Exception $e){
            return $e;
        }
        
    }

    public function permissionUpdate(Request $request){
        try{
            $model = \App\Models\Role::where('id',$request->id);
        $model->update([
            'name' => $request->role_name,
            'display_name' => $request->display_name,
            'description' => $request->description
        ]);
        $permission = \App\Models\Permission::whereIn('id',$request->permission)->get();
        $role  = \App\Models\Role::where('id',$request->id)->first();
        $role->syncPermissions($permission);

        return response()->json(['icon' => 'success','msg' => 'success'],200);
        }catch(\Exception $e){
            return response()->json(['icon' => 'error', 'msg' => $e->errorInfo]);
        }
        
    }

    public function roleUpdate(Request $request){
       try{

        $user_id = $request->user_id;
        $role_id =  $request->role_id;
        $role =  \App\Models\Role::where('id',$role_id)->first();
        $user = \App\User::find($user_id);
        $user->attachRole($role);

        return response()->json(['icon'=> 'success', 'msg' => 'success', 'data' => $user]);

       }catch(\Exception $e){

        return response()->json(['icon' => 'error', 'msg' => $e->errorInfo, 'data' => $e]);

       }
       
      
    }

    public function userSettingsCreate(Request $request){
        // return $request->all();
            DB::table('users')->insert([
                'firstname'=>$request->firstname,
                'lastname'=>$request->lastname,
                'email'=>$request->email,
                'avatar'=>NULL,
                'email_verified_at'=>NULL,
                'password'=> Hash::make($request->password),
                'remember_token'=>NULL,
                'isEnabled'=> 1,
                'created_at'=> \Carbon\Carbon::now(),
            ]);
            return response()->json(['msg'=>__('success')] , 200);
    }

    public function userSettingsDelete(Request $request)
    {
        // dd( $request->delete_id);
        DB::table('users')->where('id', $request->delete_id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(200,200);
    }
    
    public function adminEdit(Request $request){
        
            $data = DB::table('users')->where('id',$request->admin_edit_id)->first();
             return response()->json(['msg' => __('sucess'),'data' => $data],200);
    }



    public function adminUpdate(Request $request){
    //   dd($request->reason);
            $updated = DB::table('users')->where('id', $request->id);

            if ($request->firstname!= Null || $request->lastname!= Null || $request->email != Null  ) {
                $updated->update([
                    'firstname'=>$request->firstname,
                    'lastname'=>$request->lastname,
                    'email'=>$request->email,
                    'avatar'=>NULL,
                    'email_verified_at'=>NULL,
                    'remember_token'=>NULL,
                    'isEnabled' => 1,
                    'updated_at'=> \Carbon\Carbon::now(),

                ]);
            }

            if ($request->password!= Null) {
                    $updated->update([
                        'password'=> Hash::make($request->password),
                    ]);
                }

            if ($request->reason!= Null) {
                $updated->update([
                    'reason'=> $request->reason,
                    'date'=> \Carbon\Carbon::now(),
                ]); 

            }
            return response()->json(['msg'=>__('success')] , 200);
            
    }
}
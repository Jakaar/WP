<?php

namespace Itwizard\Adminpanel\Http\Controllers\Users;

use App\Models\Permission;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = DB::table('users')
            ->get();
        $roles = \App\Models\Role::get();
        $permissions = \App\Models\Permission::get();

        return view('Admin::pages.users.permission',[
            'users' => $users,
            'roles' => $roles,
            'permissions' => $permissions,
        ]);
    }
    public function GetUsers()
    {
        $data = DB::table('users')
//            ->select('')/
            ->get();
//        return $data;
        return response()->json($data, 200);
    }

    public function Members(){
        $users = \App\User::with('roles')->orderby('id','DESC')
            ->get();
            $role = \App\Models\Role::get();
        return view('Admin::pages.settings.users', [
            'users' => $users,
            'role' => $role,
        ]);
    }

    public function settings(){
        $permission = \App\MOdels\Permission::get();
        return view('Admin::pages.member_management.settings',[
            'permission' => $permission,
        ]);
    }

    public function group_email(){
        return view('Admin::pages.users.group_email');
    }

    public function email_settings(){
        return view('Admin::pages.users.email_settings');
    }

    public function adminSettings(){
        $model = DB::table('users')
        ->where('isEnabled', 1)
        ->get();
        return view('Admin::pages.basic_setting.adminSettings', [
            'model' => $model
        ]);
    }
    public function secessionist(){
        $model = DB::table('users')
        ->where('isEnabled', 0)
        ->get();
        return view('Admin::pages.member_management.secessionist',[
            'model' => $model,
        ]);
    }
}

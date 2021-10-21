<?php

namespace Itwizard\Adminpanel\Http\Controllers\Users;


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
        $data['users'] = DB::table('users')
            ->get();
        $data['roles'] = \App\Models\Role::get();
        $data['permission'] = \App\Models\Permission::get();
       
        return view('Admin::pages.users.permission', compact('data'));
    }
    public function GetUsers()
    {
        $data = DB::table('users')
//            ->select('')
            ->get();
//        return $data;
        return response()->json($data, 200);
    }

    public function Members(){
        $data['users'] = \App\User::with('roles')->orderby('id','DESC')
            ->get();
            $data['roles'] = \App\Models\Role::get();
        return view('Admin::pages.settings.users', compact('data'));
    }

    public function group_email(){
        return view('Admin::pages.users.group_email');
    }

    public function email_settings(){
        return view('Admin::pages.users.email_settings');
    }
}

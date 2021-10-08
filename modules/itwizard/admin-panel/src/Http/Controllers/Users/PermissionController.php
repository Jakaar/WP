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
}

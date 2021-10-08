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
    public function index(){

        return view('Admin::pages.users.permission');
    }
    public function GetUsers()
    {
        $data = DB::table('users')
//            ->select('')
            ->get();
        return response()->json($data, 200);
    }
}

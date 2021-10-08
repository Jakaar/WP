<?php

namespace Itwizard\Adminpanel\Http\Controllers\Users;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('Admin::pages.users.permission');
    }
}

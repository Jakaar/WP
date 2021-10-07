<?php

namespace Itwizard\Adminpanel\Http\Controllers\Dashboard;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class MenuManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('Admin::pages.manage.menu_management');
    }
}

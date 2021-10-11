<?php

namespace Itwizard\Adminpanel\Http\Controllers\Profile;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class MyProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('Admin::pages.user.profile');
    }
}

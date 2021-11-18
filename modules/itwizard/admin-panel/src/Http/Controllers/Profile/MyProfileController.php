<?php

namespace Itwizard\Adminpanel\Http\Controllers\Profile;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class MyProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $dataM['user'] = DB::table('users')
            ->where('id', auth()->user()->id)
            ->select('firstname','lastname','email','avatar')
            ->first();
        return view('Admin::pages.user.profile', compact('dataM'));
    }
}

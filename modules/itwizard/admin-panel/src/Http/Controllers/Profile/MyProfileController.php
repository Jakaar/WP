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
        $data['user'] = DB::table('users')
            ->where('id', auth()->user()->id)
            ->select('firstname','lastname','email','avatar')
            ->first();
//        dd($data);
        return view('Admin::pages.user.profile', compact('data'));
    }
}
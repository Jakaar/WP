<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

// namespace App\Http\Controllers;


class privacyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $site_info = DB::table('wpanel_site_info')->first();
        return view('Admin::pages.basic_setting.site-info',[
            'site_info' => $site_info
        ]);
    }
}

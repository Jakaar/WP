<?php

namespace Itwizard\Adminpanel\Http\Controllers\Dashboard;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SiteInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $site_info = DB::table('wpanel_site_info')->first();
    //    dd($site_info);
        return view('Admin::pages.basic_setting.site-info',[
            'site_info' => $site_info
        ]);
    }
}

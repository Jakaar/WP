<?php

namespace Itwizard\Adminpanel\Http\Controllers\Dashboard;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SiteInfoController extends Controller
{
    public function index(){

        $site_info = DB::table('wpanel_site_info')->first();
        return view('Admin::pages.basic_setting.site-info',[
            'site_info' => $site_info
        ]);
    }
    public function terms(){
        $site_info = DB::table('wpanel_site_info')->first();
        return view('Admin::pages.basic_setting.terms');
    }
    public function privacy(){
        $site_info = DB::table('wpanel_site_info')->first();
        return view('Admin::pages.basic_setting.privacy');
    }
    public function terms_of_use(){
        return view('Admin::pages.basic_setting.terms_of_use');
    }
    public function privacy_policy(){
        return view('Admin::pages.basic_setting.privacy_policy');
    }

}

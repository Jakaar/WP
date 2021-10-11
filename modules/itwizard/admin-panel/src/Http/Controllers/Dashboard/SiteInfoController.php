<?php

namespace Itwizard\Adminpanel\Http\Controllers\Dashboard;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class SiteInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data['site_info'] = DB::table('wpanel_site_info')->first();
        return view('Admin::pages.settings.site-info', compact('data'));
    }
}

<?php

namespace Itwizard\Adminpanel\Http\Controllers\Banner;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $groups=DB::table('wpanel_banners')->select('group_name')->groupBy('group_name')->where('isEnabled','!=','deleted')->get();
        $banners=DB::table('wpanel_banners')->where('isEnabled','!=','deleted')->get();
        return view('Admin::pages.banner_management.index',compact('groups','banners'));
    }

}

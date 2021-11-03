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
        $mainbanners=DB::table('banners')->where('slug','main-banner')->where('active','!=','deleted')->get();
        $verticalbanners=DB::table('banners')->where('slug','vertical-banner')->where('active','!=','deleted')->get();
        $horizontalbanners=DB::table('banners')->where('slug','horizontal-banner')->where('active','!=','deleted')->get();
        $leftbanners=DB::table('banners')->where('slug','left-banner')->where('active','!=','deleted')->get();
        $rightbanners=DB::table('banners')->where('slug','right-banner')->where('active','!=','deleted')->get();
        return view('Admin::pages.banner_management.test',compact('mainbanners','verticalbanners','horizontalbanners','leftbanners','rightbanners'));
    }

}

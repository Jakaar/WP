<?php

namespace Itwizard\Adminpanel\Http\Controllers\Content;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Admin::pages.content.index');
    }
    public function menus(){
        $data['menus'] = DB::table('wpanel_menu_client_main')->get();
        return view('Admin::pages.content.menu', compact('data'));
    }
}

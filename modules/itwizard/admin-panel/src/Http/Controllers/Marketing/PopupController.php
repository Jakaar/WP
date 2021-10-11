<?php

namespace Itwizard\Adminpanel\Http\Controllers\Marketing;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class PopupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('Admin::pages.marketing.banner');
    }
}

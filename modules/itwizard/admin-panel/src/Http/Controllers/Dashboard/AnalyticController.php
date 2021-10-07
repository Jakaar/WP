<?php

namespace Itwizard\Adminpanel\Http\Controllers\Dashboard;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class AnalyticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('Admin::pages.dashboard.analytic');
    }
}

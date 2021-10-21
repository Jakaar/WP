<?php

namespace Itwizard\Adminpanel\Http\Controllers\Dashboard;


use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class AnalyticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $today = Carbon::now();
        $startOfWeek = $today->startOfWeek()->format('Y-m-d H:i');
        $endOfWeek = $today->endOfWeek()->format('Y-m-d H:i');
        $data['users_count'] = DB::table('users')->whereBetween('created_at', [$startOfWeek, $endOfWeek])->get()->count();

        return view('Admin::pages.dashboard.analytic', compact('data'));
    }
}

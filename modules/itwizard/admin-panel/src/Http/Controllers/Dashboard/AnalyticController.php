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
        $dataC['users'] = DB::table('users')->count();
        $dataC['total_admin'] = DB::table('role_user')->where('role_id',2)->count();
        $dataC['new_user'] = DB::table('users')->whereBetween('created_at',[$startOfWeek,$endOfWeek])->get()->count();
        $dataC['total_product'] = DB::table('main_products')->count();
        $dataC['new_product'] =DB::table('main_products')->whereBetween('created_at',[$startOfWeek,$endOfWeek])->get()->count();
        $dataC['active_product'] = DB::table('main_products')->where('is_status',1)->count();
        $dataC['inactive_product'] = DB::table('main_products')->where('is_status',0)->count();
        // $data['users_count'] = DB::table('users')->whereBetween('created_at', [$startOfWeek, $endOfWeek])->get()->count();

        return view('Admin::pages.dashboard.analytic',compact('dataC'));
    }
}

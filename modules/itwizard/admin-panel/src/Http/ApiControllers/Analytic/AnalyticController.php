<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Analytic;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Helper\LogActivity;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
/**
 *
 */
class AnalyticController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function GetContentData ()
    {
        $today = Carbon::now('m');
        $startMonth = $today->startOfYear()->format('M');
        $endMonth = $today->endOfYear()->format('M');
        $thisYear = $today->format('y');
//        dd($thisYear);
        $months = [];
//Get start and end of all months

        for($i = 1; $i <= 12; $i++){
            $array = Carbon::create()->month($i)->format('M '.$thisYear);
//            $array = $today->addMonth(1)->format('M '.$thisYear);
            array_push($months, $array);
        }
//        dd($months);
        $Cdata['banner'] = DB::table('wpanel_banners')->whereBetween('created_at',[$startMonth,$endMonth])->count();
        $Cdata['page_manage'] = DB::table('wpanel_page_manage')->whereBetween('created_at',[$startMonth,$endMonth])->count();

        return response()->json(['Cdata'=>$Cdata,'labels'=>$months], 200);
    }
}

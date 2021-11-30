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
        $allMonths = (12);
        $today = Carbon::now();
        $thisYear = $today->format('Y');
        $thisMonth = $today->format('m');
        $months = [];
        $PostData = [];
        $ContentData = [];
        for($i = 0; $i <= 11; $i++){

//            $months[$i] = Carbon::create()->month($i)->format('M '.$thisYear);
            $months[$i] = Carbon::now()->startOfYear()->startOfMonth()->addMonth($i)->format('M y');
//            array_push($months, $array);
            $PostData[$i] = DB::table('wpanel_banners')
                ->whereBetween('created_at', [Carbon::now()->startOfYear()->startOfMonth()->addMonth($i),Carbon::now()->startOfYear()->addMonth($i)->endOfMonth()])
                ->get()
                ->count();
//            dump($PostData);
        }
        
//        dd('e');
//        $Cdata['page_manage'] = DB::table('wpanel_page_manage')->whereBetween('created_at',[$startMonth,$endMonth])->count();
        return response()->json(['Cdata'=>$PostData,'labels'=>$months], 200);
    }
}

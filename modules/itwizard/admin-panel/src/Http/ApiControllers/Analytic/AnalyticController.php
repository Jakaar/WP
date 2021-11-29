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
        $PostData = [];
//Get start and end of all months

        for($i = 1; $i <= 12; $i++){
            $array = Carbon::create()->month($i)->format('M '.$thisYear);
            $temp = Carbon::create()->month($i)->format('M');
            $tempEnd = Carbon::create()->month($i)->addMonth()->format('M');
            array_push($months, $array);
            if (Carbon::now()->format('m') === Carbon::create()->month($i)->format('m'))
            {
                $Post = DB::table('wpanel_banners')
                    ->whereBetween('created_at',
                        [
//                        Carbon::parse($today->month($i)->startOfMonth())->toDateTimeString(),
//                        Carbon::parse($today->month($i)->endOfMonth())->toDateTimeString()
                            '2021-11-1',
                            '2021-11-31',
                        ]
                    )
                    ->get()
                    ->count();
            }else{
                $Post = DB::table('wpanel_banners')
                    ->whereBetween('created_at',
                        [
                            Carbon::parse($today->month($i)->startOfMonth())->toDateTimeString(),
                            Carbon::parse($today->month($i)->endOfMonth())->toDateTimeString()

                        ]
                    )
                    ->get()
                    ->count();
            }
            array_push($PostData, $Post);
//            dump(Carbon::parse($today->month($i)->endOfMonth())->toDateTimeString());
        }
//        dd($PostData);
//        $Cdata['page_manage'] = DB::table('wpanel_page_manage')->whereBetween('created_at',[$startMonth,$endMonth])->count();

        return response()->json(['Cdata'=>$PostData,'labels'=>$months], 200);
    }
}

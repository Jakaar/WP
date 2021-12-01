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
use mysql_xdevapi\Table;

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
        $Product = DB::table('main_products')
            ->leftJoin('main_product_categories', 'main_products.category_id', '=', 'main_product_categories.id')
            ->groupBy('category_id')
            ->select(
                'category_id',
                DB::raw('count(*) as total'),
                'main_product_categories.name'
            )
            ->get();

        $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
        $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
        for ($i = 0; $i <= 11; $i++) {

//            $months[$i] = Carbon::create()->month($i)->format('M '.$thisYear);
            $months[$i] = __(Carbon::now()->startOfYear()->startOfMonth()->addMonth($i)->format('M') . ' :Year', ['Year' => Carbon::now()->startOfYear()->startOfMonth()->addMonth($i)->format('y')]);
//            array_push($months, $array);
            $PostData[$i] = DB::table('wpanel_banners')
                ->whereBetween('created_at', [Carbon::now()->startOfYear()->startOfMonth()->addMonth($i), Carbon::now()->startOfYear()->addMonth($i)->endOfMonth()])
                ->where('isEnabled', '=', 'Used')
                ->get()
                ->count();
//            dump($PostData);
        }
        for ($i = 0; $i <= 11; $i++) {
            $ContentData[$i] = DB::table('wpanel_page_manage')
                ->whereBetween('created_at', [Carbon::now()->startOfYear()->startOfMonth()->addMonth($i), Carbon::now()->startOfYear()->addMonth($i)->endOfMonth()])
                ->where('isEnable', '=', 1)
                ->get()
                ->count();
        }
//        dd('e');
//        $Cdata['page_manage'] = DB::table('wpanel_page_manage')->whereBetween('created_at',[$startMonth,$endMonth])->count();
        return response()->json(['bData' => $PostData, 'labels' => $months, 'cData' => $ContentData, 'color' => $color, 'Product' => $Product], 200);
    }
}

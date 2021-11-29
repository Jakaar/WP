<?php

namespace Itwizard\Adminpanel\Http\Controllers\NoticeBoardManagement;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $dataM['board_type'] = DB::table('wpanel_board_type')->get();
        $dataM['board_master'] = DB::table('wpanel_board_master')->where('isEnabled','!=','0')->get();

        

        return view('Admin::pages.noticeboard.index', compact('dataM'));

    }
    public function search(Request $request)
    {
        $dataM['board_type'] = DB::table('wpanel_board_type')->get();
 
        $daterange=explode(' - ',$request->daterange);
            $startDate=$daterange[0];
            $endDate=$daterange[1];
            if ($request->has(['board_type', 'isEnabled','daterange','board_name']))
            {
            $results=DB::table('wpanel_board_master')
            ->where('board_type',$request->board_type)
            ->where('isEnabled',$request->isEnabled)
            ->where('created_at','>=',$startDate)
            ->where('created_at', '<=', $endDate)
            ->where('board_name','LIKE', '%' .$request->search. '%')
            ->get();
            }
            elseif($request->has(['board_type','daterange']))
            {
            $results=DB::table('wpanel_board_master')
            ->where('board_type',$request->board_type)
            ->where('created_at','>=',$startDate)
            ->where('created_at', '<=', $endDate)
            ->get();
            }
            elseif($request->has(['board_type','daterange','search']))
            {
            $results=DB::table('wpanel_board_master')
            ->where('board_type',$request->board_type)
            ->where('created_at','>=',$startDate)
            ->where('created_at', '<=', $endDate)
            ->where('board_name','LIKE', '%' .$request->search. '%')
            ->get();
            }
            elseif($request->has(['board_type','daterange','isEnabled']))
            {
            $results=DB::table('wpanel_board_master')
            ->where('board_type',$request->board_type)
            ->where('isEnabled',$request->isEnabled)
            ->where('created_at','>=',$startDate)
            ->where('created_at', '<=', $endDate)
            ->get();
            }
            elseif($request->has(['daterange','isEnabled']))
            {
            $results=DB::table('wpanel_board_master')
            ->where('isEnabled',$request->isEnabled)
            ->where('created_at','>=',$startDate)
            ->where('created_at', '<=', $endDate)
            ->get();
            }
            elseif($request->has(['daterange','search']))
            {
            $results=DB::table('wpanel_board_master')
            ->where('created_at','>=',$startDate)
            ->where('created_at', '<=', $endDate)
            ->where('board_name','LIKE', '%' .$request->search. '%')
            ->get();
            }
            elseif($request->has(['daterange','search','isEnabled']))
            {
            $results=DB::table('wpanel_board_master')
            ->where('board_name','LIKE', '%' .$request->search. '%')
            ->where('isEnabled',$request->isEnabled)
            ->where('created_at','>=',$startDate)
            ->where('created_at', '<=', $endDate)
            ->get();
            }
        
        return view('Admin::pages.noticeboard.search', compact('dataM','results'));
    }

}

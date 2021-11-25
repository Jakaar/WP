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
        $dataM['board_master'] = DB::table('wpanel_board_master')->get();

        

        return view('Admin::pages.noticeboard.index', compact('dataM'));

    }
    public function search(Request $request)
    {
        $dataM['board_type'] = DB::table('wpanel_board_type')->get();
        if ($request->has('board_type'))
        {
            $results=DB::table('wpanel_board_master')->where('board_type',$request->board_type)->get();
        }
        if ($request->has('daterange'))
        {
       
            $daterange=explode(' - ',$request->daterange);
            $startDate=$daterange[0];
            $endDate=$daterange[1];
            $results=DB::table('wpanel_board_master')
            ->where('created_at','>=',$startDate)
            ->where('created_at', '<=', $endDate)
            ->get();
        }
        if ($request->has('search'))
        {
            $results=DB::table('wpanel_board_master')
            ->where('board_name','LIKE', '%' .$request->search. '%')
            ->get();
        }
        if ($request->has('isEnabled'))
        {

            $results=DB::table('wpanel_board_master')->where('isEnabled',$request->isEnabled)->get();
        }
        
        return view('Admin::pages.noticeboard.search', compact('dataM','results'));
    }

}

<?php

namespace Itwizard\Adminpanel\Http\Controllers\NoticeBoardManagement;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $dataM['board_type'] = DB::table('wpanel_board_type')->get();
        $dataM['board_master'] = DB::table('wpanel_board_master')->get();

        return view('Admin::pages.noticeboard.index', compact('dataM'));
    }

}

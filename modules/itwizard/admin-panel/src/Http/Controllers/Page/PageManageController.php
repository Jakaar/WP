<?php
namespace Itwizard\Adminpanel\Http\Controllers\Page;

use App\Category;
use App\Helper\Helper;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
class PageManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $categories = Category::whereNull('category_id')
//            ->where('isEnabled', 1)
//            ->leftJoin('wpanel_board_master','wpanel_board_master.id','categories.board_master_id')
//            ->select(
//                'categories.id',
//                'categories.name',
//                'wpanel_board_master.id as Bid',
//                'wpanel_board_master.board_type',
//            )
//            ->with('childrenCategories')
//            ->get();

        $content['data'] = DB::table('categories')
            ->whereNull('category_id')
            ->where('isEnabled', 1)
            ->leftJoin('wpanel_board_master','wpanel_board_master.id','categories.board_master_id')
//            ->leftJoin('')
            ->select(
                'categories.id',
                'categories.name',
                'wpanel_board_master.id as Bid',
                'wpanel_board_master.board_type',
            )
            ->get();

//        $isCategory = DB::table('');
//        dd($categories[0]->board_type);
        $content['detail'] = 0;
        return view('Admin::pages.manage_pages.manage_pages',compact('content'));
    }
    public function page_content($id)
    {
        $content['data'] = DB::table('categories')
            ->whereNull('category_id')
            ->where('isEnabled', 1)
            ->leftJoin('wpanel_board_master','wpanel_board_master.id','categories.board_master_id')
//            ->leftJoin('')
            ->select(
                'categories.id',
                'categories.name',
                'wpanel_board_master.id as Bid',
                'wpanel_board_master.board_type',
                'wpanel_board_master.isCategory',
            )
            ->get();
        $content['detail'] = 1;

//        $content['details'] =
//        dd($content);
        return view('Admin::pages.manage_pages.manage_pages',compact('content'));
    }
}

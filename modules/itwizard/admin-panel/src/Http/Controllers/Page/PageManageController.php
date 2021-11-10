<?php
namespace Itwizard\Adminpanel\Http\Controllers\Page;

use App\Category;
use App\Helper\Helper;
use App\Models\ContentCategory;
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
            ->get();
        $content['detail'] = 1;
        $content['type'] = DB::table('categories')
            ->leftJoin('wpanel_board_master','wpanel_board_master.id','categories.board_master_id')
            ->where('categories.id', $id)
            ->select(
                'categories.id',
                'categories.board_master_id',
                'wpanel_board_master.id as mId',
                'wpanel_board_master.isCategory',
                'wpanel_board_master.board_type'
            )
            ->first();

        $content['categories'] = ContentCategory::whereNull('content_category_id')
            ->where(['board_master_id'=>$id])
            ->with('subCategories')
            ->get();
//        dd($content);
        return view('Admin::pages.manage_pages.manage_pages',compact('content'));
    }
}

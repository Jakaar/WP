<?php
namespace Itwizard\Adminpanel\Http\Controllers\Page;

use App\Category;
use App\Helper\Helper;
use App\Models\ContentCategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PageManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $content['data'] = \App\UserMenu::whereNull('category_id')->where('isEnabled',1)->get();
//        $isCategory = DB::table('');
//        dd($categories[0]->board_type);
        $content['detail'] = 0;
        return view('Admin::pages.manage_pages.manage_pages',compact('content'));
    }
    public function page_content($id)
    {
        // $content['data'] = DB::table('categories as firstcat')
        //     ->where('firstcat.category_id','=',null)
        //     ->where('firstcat.isEnabled', 1)
        //     ->join('categories as cat','cat.category_id','firstcat.id')
        //     ->get();
        $content['data'] = \App\UserMenu::whereNull('category_id')->where('isEnabled',1)->get();
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

        $boardData = DB::table('wpanel_board_data')
//                ->where('board_master_id', $temp->id)
            ->where('category_id', $id)
            ->get();
//        dd($boardData);
            if (count($boardData) > 1)
            {
                $content['PageData'] = $boardData;
            } else if(count($boardData) == 0){
                $content['PageData'] = null;
            } else if(count($boardData) <= 1){
                $boardData[0]->content = json_decode($boardData[0]->content, true);
                $content['PageData'] = $boardData[0];
            }
//        dd($content);
        return view('Admin::pages.manage_pages.manage_pages',compact('content'));
    }
    public function page_content_details($id, $slug)
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
            ->where(['board_master_id' => $id])
            ->with('subCategories')
            ->get();
        dd($content,$slug);
        return view('Admin::pages.manage_pages.manage_pages',compact('content'));
    }
}

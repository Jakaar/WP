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

//    public function index()
//    {
//        $content['data'] = \App\UserMenu::whereNull('category_id')->where('isEnabled',1)->get();
////        $isCategory = DB::table('');
////        dd($categories[0]->board_type);
//        $content['detail'] = 0;
//        return view('Admin::pages.manage_pages.manage_pages',compact('content'));
//    }
    public function index()
    {
        $content['data'] = \App\UserMenu::whereNull('category_id')->where('isEnabled',1)->get();
        $content['detail'] = 0;
        return view('Admin::pages.manage_pages.index',compact('content'));
    }
    public function page_content($id)
    {
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
//        dd($content,$slug);
        return view('Admin::pages.manage_pages.manage_pages',compact('content'));
    }
    public function detector($id, $board)
    {
        $content['data'] = \App\UserMenu::whereNull('category_id')->where('isEnabled',1)->get();
        $content['detail'] = 0;
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
        $board = DB::table('wpanel_board_master')->where('id', $board)->first();

        if($board->board_type === 'FAQ')
        {
            $FAQ = DB::table('main__f_a_q')
//                ->where('board_master_id',$board)
                ->where('category_id',$id)
                ->where('is_enable',1)
                ->get();
            return view('Admin::pages.manage_pages.index',compact('content','board','FAQ'));
        }
        if ($board->board_type === 'Category')
        {
            $content['categories'] = ContentCategory::whereNull('content_category_id')
                ->where(['board_master_id' => $id])
                ->with('subCategories')
                ->get();
            return view('Admin::pages.manage_pages.index',compact('content','board'));
        }
        if ($board->board_type === 'Gallery')
        {
            $content['categories'] = ContentCategory::whereNull('content_category_id')
                ->where(['board_master_id' => $id])
                ->with('subCategories')
                ->get();
            $Groups = DB::table('main__gallery__category')
                ->where('main__gallery__category.category_id', $id)
                ->get();
//            dd($Groups);
            return view('Admin::pages.manage_pages.index',compact('content','board','Groups'));
        }

    }
}

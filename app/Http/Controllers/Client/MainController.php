<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ContentCategory;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('client.pages.index');
    }
//    public function viewer($id, $slug)
//    {
////        dd($id, $slug);
//        $temp = DB::table('wpanel_board_master')->where('id', $id)->first();
//        if ($temp)
//        {
////            $dump = DB::table('wpanel_board_data')->dd();
//            $boardData = DB::table('wpanel_board_data')
////                ->where('board_master_id', $temp->id)
//                ->where('category_id', $slug)
//                ->get();
//
//            $data['options'] = $temp;
//
//            if (count($boardData) > 1) {
//                foreach ($boardData as $item) {
//                    $translating = json_decode($item->content, true);
//                    $item->content = $translating[Session::get('locale')];
//                }
//                $data['board'] = $boardData;
//            } else if (count($boardData) == 0) {
//                $data['board'] = null;
//            }else if (count($boardData) <= 1){
//                $translating = json_decode($boardData[0]->content, true);
//                $boardData[0]->content = $translating[Session::get('locale')];
//                $data['board'] = $boardData[0];
//            }
////            dd($data);
//
//            if (isset($data['board']->isSubCategory))
//            {
//                $data['options']->board_type = 'SinglePage';
//                return view($this->compiler($data, $temp),  compact('data'));
//            }
//            if ($data['board'] == null)
//                return view('client.errors.404');
//            return view($this->compiler($data, $temp),  compact('data'));
//        }else{
//            $temp = (object) null;
//            $temp->board_type = 'empty';
//            return view($this->compiler('',$temp));
//        }
//
//    }
    public function viewer($slug, $id, $uuid = null)
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
        $board = DB::table('wpanel_board_master')->where('id', $slug)->first();

        if($uuid)
        {
            $uuid = base64_decode(base64_decode($uuid));
            $List = null;
            if(is_numeric($uuid))
            {
              $List = DB::table('main__category__page')
                  ->where('main_category_id', $uuid)
                  ->where('is_enabled', 1)
                  ->paginate(15);
            }
//            dd($List);
            return view('client.pages.CategoryList', compact('List'));
        }else{
            if($board->board_type === 'FAQ')
            {
                $FAQ = DB::table('main__f_a_q')
//                ->where('board_master_id',$board)
                    ->where('category_id',$id)
                    ->where('is_enable',1)
                    ->get();
                return view('client.pages.FAQ',compact('content','board','FAQ'));
            }
            if ($board->board_type === 'Category')
            {
                $Categories = DB::table('main__category')
                    ->where('category_id', $id)
                    ->where('is_enabled', 1)
                    ->get();
                return view('client.pages.Category',compact('board','Categories'));
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
                return view('client.pages.Gallery',compact('content','board','Groups'));
            }
            if ($board->board_type === 'SinglePage')
            {
                $content['categories'] = ContentCategory::whereNull('content_category_id')
                    ->where(['board_master_id' => $id])
                    ->with('subCategories')
                    ->get();
                $SinglePageData = DB::table('main__single_page_data')
                    ->where('category_id', $id)
                    ->first();
                if (isset($SinglePageData))
                {
                    $SinglePageData->data = json_decode($SinglePageData->data, true);
                }
//            dd($SinglePageData->data['en']);
                return view('client.pages.SinglePage',compact('SinglePageData'));
            }
        }
    }


    public function compiler($data, $temp): string
    {
        if (View::exists('client.pages.'.$temp->board_type)) {
            return 'client.pages.'.$temp->board_type;
        }
        return 'client.errors.404';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|Application|\Illuminate\View\View
     */
    public function uuid($id, $slug, $uuid)
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
        $board = DB::table('wpanel_board_master')->where('id', $slug)->first();
        $dId = decrypt($uuid);

        return view('client.pages.CategoryList');
    }

    public function BlogDetail($uuid)
    {
        $uuid = base64_decode(base64_decode($uuid));
        $BlogDetails = DB::table('main__category__page')->where('id', $uuid)->first();
//        dd($uuid,$BlogDetails);
        if (\session()->get('locale') === 'kr')
        {
            Carbon::setLocale('ko');
        }else{
            Carbon::setLocale(session()->get('locale'));
        }
        $InCategoryNews = DB::table('main__category__page')
            ->where('main_category_id', $BlogDetails->main_category_id)
            ->where('is_enabled', 1)
            ->get()
            ->take(3);
        return \view('client.pages.SinglePage', compact('BlogDetails','InCategoryNews'));
    }
}

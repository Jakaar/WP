<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ContentCategory;
use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $banners = DB::table('wpanel_banners')
                    ->where('isEnabled', 'used')
                    ->get();
        return view('client.pages.index',compact('banners'));
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
        $title = DB::table('categories')->where('id', $id)->first();
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
                    $datas['form_builded'] = DB::table('form_builded')
                    ->where('board_master_id', $slug)
                    ->where('category_id', $id)
                    ->where('isEnabled',1)
                    ->first();
                return view('client.pages.FAQ',compact('content','board','FAQ','datas'));
            }
            if ($board->board_type === 'Category')
            {
//                $title = DB::table('categories')->where('id', $id)->first();
                $Categories = DB::table('main__category')
                    ->where('category_id', $id)
                    ->where('is_enabled', 1)
                    ->get();
                    $datas['form_builded'] = DB::table('form_builded')
                    ->where('board_master_id', $slug)
                    ->where('category_id', $id)
                    ->where('isEnabled',1)
                    ->first();
                return view('client.pages.Category',compact('board','Categories','datas','title'));
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
                    $datas['form_builded'] = DB::table('form_builded')
                    ->where('board_master_id', $slug)
                    ->where('category_id', $id)
                    ->where('isEnabled',1)
                    ->first();
                return view('client.pages.Gallery',compact('content','board','Groups','datas','title'));
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
                $banners = DB::table('wpanel_banners')
                    ->where('isEnabled', 'used')
                    ->first();

                $datas['form_builded'] = DB::table('form_builded')
                ->where('board_master_id', $slug)
                ->where('category_id', $id)
                ->where('isEnabled',1)
                ->first();
        //    dd($datas['form_builded'] ->board_master_id,$datas['form_builded'] ->category_id);
                return view('client.pages.SinglePage',compact('SinglePageData','banners','datas'));
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
//        dd('ff');
        $isComment = (new CommentController)->isComment($BlogDetails->main_category_id, $uuid);
//        dd($isComment->isComment);
        return \view('client.pages.SinglePage', compact('BlogDetails','InCategoryNews','isComment'));
    }
    public function GalleryDetail($slug, $id, $uuid)
    {
        $title = DB::table('categories')->where('id', $id)->first();
        $uuid = base64_decode(base64_decode($uuid));
        $Details = DB::table('main__gallery__photos')->where('id',$uuid)->first();
        return \view('client.pages.GalleryDetails', compact('title','Details'));
    }

    public function client_form_data(Request $request)
    {
        // dd($request->file('file-1638705379015-0'));
       $validated = $request->all();
       $form_id = $request->form_id;
       $content = Arr::except($validated, ['_token', 'form_id']);
       $aa = Arr::except($validated, ['_token', 'form_id']);

       $content= json_encode($content);

      $iId = DB::table('client_form_data')->insertGetId([
           'content'=>$content,
           'isEnabled'=>1,
           'form_id'=>$form_id,
           'submited_at'=> \Carbon\Carbon::now(),
       ]);

            $settingValue = [];
            foreach($aa as $ka=>$j)
            {
                if(explode('-',$ka)[0] === 'file' )
                {
                     // array_push($settingValue, $j);
                     $file = $j;
                     $realName = $file->getClientOriginalName();
                     $ext = $file->getClientOriginalExtension();
                     $saveName = uniqid('client_');
                     // dd($realName, $ext);
                     try {

                         $file->move(storage_path('app/client/form/files'), $saveName.'.'.$ext);
                         DB::table('client_form_data_file')->insert([
                            'realname'=>$realName,
                            'file_path'=>'app/client/form/files/'.$saveName.'.'.$ext,
                            'client_form_data_id'=> $iId,
                        ]);
                     } catch (Exception $e)
                     {
                         dd($e);
                     }
                }
            }

            return back()->with('success', 'Success!');
    }
    public function products()
    {
        $products = DB::table('main_products')->paginate(4);
//        dd($products);
        return \view('client.pages.products.index',compact('products'));
    }

    public function details($code){
        $model = \App\Product::where('sku',$code)->first();
        return view('client.pages.products.details',[
            'model' => $model,
        ]);
    }
//
}

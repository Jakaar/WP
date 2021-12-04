<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Page;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Table;
use Symfony\Component\Console\Input\Input;
class PageContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//    public function singlePage(Request $request)
//    {
//        DB::table('wpanel_page_manage')
//        ->insert([
//            'priority' => $request->Priority,
//            'menu_group' => $request->GroupManage,
//            'page_name' => $request->PageName,
//            'connection' => $request->Connection,
//            'page_url' => $request->PageUrl,
//            'page_code' => $request->PageCode,
//            'page_content' => $request->PageContent,
//            'isEnable' => $request->isEnable,
//        ])   ;
//        return response()->json(['msg'=>'success'], 200);
//    }
//    public function index()
//    {
//        $data = DB::table('wpanel_page_manage')->get();
//      return $data;
////        return response()->json($data, 200);
//    }
    public function DeletePage($id)
    {
         DB::table('wpanel_page_manage')
             ->where('id',$id)
             ->update([
                 'isEnable'=>0
             ]);

        return response()->json(['msg'=>__('success')], 200);
    }
    public function contentcategory(Request $request)
    {
//        dd();

//        try {
            DB::table('content_categories')->insert([
                'name'=>json_encode($request->NewCategoryName),
                'content_category_id' => $request->parentId,
                'isEnabled'=> 1,
                'board_master_id'=> $request->menuId,
            ]);
            return redirect()->back();
//        }catch (\Exception $exception)
//        {
//            return $exception;
//        }
    }
    public function contentcreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "editor"    => "required|array",
            "editor.*"  => "required",
        ]);

        if ($validator->fails())
        {
            $langs = [];
            foreach (array_keys($validator->errors()->getMessages()) as $errors)
            {
                $errors = DB::table('wpanel_available_language')->where('country_code',explode('.',$errors)[1])->first();
                array_push($langs, $errors->country);
            }
            return back()->withErrors($langs);
        }
        if ($validator->passes())
        {
            try {
                $data = json_encode($validator->validated()['editor'], true);

                if ($request->type === 'SinglePage')
                {
                    DB::table('wpanel_board_data')->updateOrInsert(['category_id'=> explode('/',$request->option)[5]], [
                        'title'=>'null',
                        'board_master_id' => 0,
                        'category_id' => explode('/',$request->option)[5],
                        'content' => $data
                    ]);
                    return back()->with('message', 'Successfully Saved');
                }else if ($request->type === 'Category'){
                    DB::table('wpanel_board_data')->updateOrInsert(['category_id'=> explode('/',$request->option)[5]], [
                        'title'=>'null',
                        'board_master_id' => 0,
                        'isSubCategory' => 1,
                        'category_id' => explode('/',$request->option)[5],
                        'content' => $data
                    ]);
                    return back()->with('message', 'Successfully Saved');
                }
            }
                catch (\Exception $exception)
            {
                return $exception;
            }
        }
    }
    public function GalleryGetContent($id)
    {
        $data = DB::table('main__gallery__photos')
            ->where('gallery_id', $id)
            ->first();
        if ($data)
        {
            return response()->json(['msg'=>'success', 'data'=>$data], 200);
        }
        return response()->json(['msg'=>'success', 'data'=> null], 200);

    }
    public function GalleryCreateContent(Request $request, $id)
    {
        DB::table('main__gallery__photos')->updateOrInsert(['gallery_id'=>$id],[
            'photos'=> $request->data,
        ]);
        return response()->json(['msg'=>'success'], 200);

    }
    public function SinglePageCreate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "editor"    => "required|array",
            "editor.*"  => "required",
        ]);

        if ($validator->fails())
        {
            $langs = [];
            foreach (array_keys($validator->errors()->getMessages()) as $errors)
            {
                $errors = DB::table('wpanel_available_language')->where('country_code',explode('.',$errors)[1])->first();
                array_push($langs, $errors->country);
            }
            return back()->withErrors($langs);
        }
        if ($validator->passes())
        {
            $data = json_encode($validator->validated()['editor'], true);
            DB::table('main__single_page_data')->updateOrInsert(['category_id'=> explode('/',$request->url)[5]], [
                'board_master_id' => $request->board_master_id,
                'category_id' => explode('/',$request->url)[5],
                'is_enable' => 1,
                'data' => $data
            ]);
            return back()->with('message', 'Successfully Saved');
        }
//        return response()->json(true, 200);
    }

    public function CategoryCreate(Request $request)
    {
//        dd(explode('/', $request->url)[5]);
        DB::table('main__category')->insert([
            'name' => $request->name,
            'description' => $request->desc,
            'main_img' => $request->img,
            'board_master_id' => $request->board_master_id,
            'category_id' => explode('/', $request->url)[5],
        ]);
        return back()->with(['message'=> __('Category Created')]);
//        dd($request->all());
    }
    public function GalleryCreate(Request $request)
    {
        DB::table('main__gallery__category')->insert([
            'name' => $request->name,
            'is_enable' => 1,
            'description' => $request->description,
            'main_img' => $request->main_img,
            'board_master_id' => $request->board_master_id,
            'category_id' => explode('/', $request->url)[5],
        ]);
        return back()->with(['message' => $request->name.' '. __('Created')]);
    }
    public function GetPostDetails($id)
    {
        $data = DB::table('main__category__page')->where('id', $id)->first();
        return response()->json($data, 200);
    }
    public function GetPostCreateOrUpdate(Request $request, $id)
    {
        if ($id)
        {
            dd('have');
        }
        dd('not have');
    }
}

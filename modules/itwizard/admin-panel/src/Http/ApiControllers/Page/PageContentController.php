<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Page;

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

//                dd($data, $request->all());

                if ($request->type === 'SinglePage')
                {
                    DB::table('wpanel_board_data')->updateOrInsert(['category_id'=> explode('/',$request->option)[5]], [
                        'title'=>'null',
                        'board_master_id' => 0,
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
}

<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Content;

use App\Category;
use App\Helper\Helper;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json(['msg'=>__('success')], 200);
    }
    public function DeleteMenu($id)
    {
        DB::table('categories')->where('id', $id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(200,200);
    }
    public function CreateMenu(Request $request)
    {
        try {
            if ($request->parent_id) {
                $getId = DB::table('categories')->insertGetId([
                    'category_id' => $request->parent_id,
                    'name' => $request->MenuName,
                    'target' => $request->OpenType,
                    'board_master_id'=>$request->board_id,
                    'isEnabled' => 1,
                    'menu_url' => asset('')
                ]);
                return response()->json(['msg' => __('success'),'details'=>'Sub menu created, id is:'.$getId], 200);
            }
            else {
                $getId = DB::table('categories')->insertGetId([
                    'category_id'=> null,
                    'name'=>$request->MenuName,
                    'target'=>$request->OpenType,
                    'board_master_id'=>$request->board_id,
                    'isEnabled'=> 1,
                    'menu_url'=> asset('')
                ]);
                return response()->json(['msg' => __('success'),'details'=>'Main menu created, id is:'.$getId], 200);
            }
        }
        catch (\Exception $exception)
        {
            return response()->json(['error_code'=>'CreateMenu Function not working'], 500);
        }
    }

    public function updateMenu(Request $request){
        DB::table('categories')->where('id',$request->id)->update([
            'name' => $request->name,
            'menu_url' => $request->menu_url,
            'target' => $request->target,
            'isEnabled' => $request->use,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);

        return response()->json(['msg'=>__('success')] , 200);

    }

    public function getMenu(Request $request){
       $data = DB::table('categories')->where('id',$request->id)->first();
       $data->name = (new \App\Helper\Helper)->translateText($data->name);
        return response()->json(['msg' => __('success'),'data' => $data],200);
    }

}

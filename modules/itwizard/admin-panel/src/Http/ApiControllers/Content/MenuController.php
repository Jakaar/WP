<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Content;

use App\Category;
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

    /**
     * @throws \Throwable
     */
    public function DeleteMenu($id)
    {
        DB::table('categories')->where('id', $id)->update([
            'isEnabled' => 1
        ]);
        return response()->json(200,200);
    }
    public function CreateMenu(Request $request)
    {
//        dd($request->parent_id);
        DB::table('categories')->insert([
            'category_id'=>$request->parent_id,
            'name'=>$request->MenuName,
            'target'=>$request->OpenType,
            'isEnabled'=> 1,
            'menu_url'=> asset('')
        ]);
        return response()->json(['msg'=>__('success')] , 200);
    }

}

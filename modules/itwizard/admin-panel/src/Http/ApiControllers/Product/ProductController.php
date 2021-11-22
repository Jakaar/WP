<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getData(Request $request){
        $model = DB::table('main_products')->where('id',$request->id)->first();
        return response()->json(['msg' => true,'data' => $model]);
    }
    public function statusChanger($id)
    {
        $checker = DB::table('main_products')->where('id',$id)->first();
        if ($checker->is_status === 1)
        {
            DB::table('main_products')->where('id',$id)->update(['is_status' => 0]);
            $msg = __(':Name Item Disabled', ['name'=> $checker->name]);
        }
        elseif ($checker->is_status === 0)
        {
            DB::table('main_products')->where('id',$id)->update(['is_status' => 1]);
            $msg = __(':Name Item Enabled', ['name'=> $checker->name]);
        }
        return response()->json(['msg'=> $msg], 200);
    }
    public function DeleteItem($id)
    {
        $name = DB::table('main_products')->where('id', $id)->first();
//        DB::table('main_products')->where('id', $id)->delete();
        return response()->json(['msg'=> __(':Name Item Has Been Deleted', ['name'=>$name->name])], 200);
    }
    public function MultipleDelete(Request $request)
    {
        foreach ($request->all() as $item)
        {
//            DB::table('main_products')->where('id', $item)->delete();
        }
        return response()->json(['msg'=> __('Selected Items Has Been Deleted')], 200);
    }
}

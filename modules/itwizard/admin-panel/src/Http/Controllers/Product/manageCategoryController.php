<?php

namespace Itwizard\Adminpanel\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class manageCategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = \App\ProductCategory::where('state',1)->get();
        $parent = DB::table('wpanel_product_category')->where('category_id', NULL)->where('state',1)->get();

        return view('Admin::pages.product_management.manageCategory', [
            'category' => $category,
            'parent' => $parent
        ]);
    }

    public function create(Request $request)
    {
        DB::table('wpanel_product_category')->insert([
            'category_name' => $request->MenuName,
            'explanation' => $request->MenuDesc,
            'category_id' => $request->parent_id,
            'state' => $request->use,
            'order' => '1',
        ]);

        return response()->json(['msg' => 'success'], 200);
    }

    public function update(Request $request)
    {
        // return $request->all();

        $updated = DB::table('wpanel_product_category')->where('id', $request->id);

        $updated->update([
            'category_name' => $request->name,
            'explanation' => $request->desc,
            'category_id' => $request->parent_id,
            'state' => $request->use,
        ]);

        return response()->json(['msg' => 'success'], 200);
    }

    public function deletePage($id)
    {
        DB::table('wpanel_product_category')
            ->where('id', $id)
            ->update([
                'state' => 0
            ]);

        return response()->json(['msg' => __('success')], 200);
    }

    public function singleProduct(Request $request){
        $data = DB::table('wpanel_product_category')->where('id',$request->id)->first();
        return response()->json(['msg' => 'success', 'data' => $data ], 200);
    }
}

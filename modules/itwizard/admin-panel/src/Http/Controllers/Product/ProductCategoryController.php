<?php

namespace Itwizard\Adminpanel\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['product'] = DB::table('wpanel_product_category')->get();
        $data['parent'] = DB::table('wpanel_product_category')->where('category_id', NULL)->get();
        $data['prdct'] = DB::table('wpanel_product_manage')->where('isEnable',1)->get();

        $data['prd'] = DB::table('wpanel_product_manage')
        ->leftJoin(
            'wpanel_product_category',
            'wpanel_product_manage.product_classification',
            '=',
            'wpanel_product_category.id'
            )
        ->select(
            'wpanel_product_manage.product_classification as pId',
            'wpanel_product_category.category_name'
            )
        ->get();
        return view('Admin::pages.product_management.productManage', compact('data'));
    }

    public function create(Request $request)
    {
        DB::table('wpanel_product_manage')->insert([
            'product_classification' => $request->classification,
            'product_name' => $request->name,
            'product_code' => $request->code,
            'product_price' => $request->price,
            'product_informationlist' => $request->informationList,
            'product_informationreduction' => $request->informationReduction,
            'product_informationdetail' => $request->informationDetail,
            'product_informationenlargement' => $request->informationEnlargement,
            'product_desc' => $request->c_product_editor,
            'product_detail' => $request->prodDetails,
            'product_image' => $request->picture,
            'isEnable' => 1,
        ]);
        return response()->json(['msg' => 'success'], 200);
    }

    public function singleProduct(Request $request)
    {
        $data = DB::table('wpanel_product_manage')->where('id', $request->id)->first();
        return response()->json(['msg' => 'success', 'data' => $data], 200);
    }

    public function update(Request $request)
    {
        $updated = DB::table('wpanel_product_manage')->where('id', $request->id);
        $updated->update([
            'product_classification' => $request->classification,
            'product_name' => $request->name,
            'product_code' => $request->code,
            'product_price' => $request->price,
            'product_informationlist' => $request->informationList,
            'product_informationreduction' => $request->informationReduction,
            'product_informationdetail' => $request->informationDetail,
            'product_informationenlargement' => $request->informationEnlargement,
            'product_desc' => $request->e_product_editor,
            'product_detail' => $request->prodDetails,
            'product_image' => $request->picture
        ]);
        return response()->json(['msg' => 'success'], 200);
    }

    public function delete($id){
        DB::table('wpanel_product_manage')
        ->where('id', $id)
        ->update([
            'isEnable' => 0
        ]);

    return response()->json(['msg' => __('success')], 200);
    }
}

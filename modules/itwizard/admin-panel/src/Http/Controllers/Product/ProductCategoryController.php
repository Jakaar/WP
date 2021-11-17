<?php

namespace Itwizard\Adminpanel\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\Helper;
use App\Helper\LogActivity;

/**
 *
 */
class ProductCategoryController extends Controller
{
    //
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $product = DB::table('wpanel_product_category')->get();
        $parent = DB::table('wpanel_product_category')->where('category_id', NULL)->where('state',1)->get();
        $prdct = \App\Product::where('isEnable',1)->with('category')->get();

//        $data['prd'] = DB::table('wpanel_product_manage')
//        ->leftJoin('wpanel_product_category','wpanel_product_manage.product_classification','=','wpanel_product_category.id')
//        ->get();

        return view('Admin::pages.product_management.productManage', [
            'category' => $product,
            'parent' => $parent,
            'prdct' => $prdct,
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        LogActivity::addToLog('Created Product');
        DB::table('wpanel_product_manage')->insert([
            'product_classification' => $request->classification,
            'product_name' => $request->MenuName,
            'product_code' => $request->code,
            'product_price' => $request->price,
            'product_informationlist' => $request->informationList,
            'product_informationreduction' => $request->informationReduction,
            'product_informationdetail' => $request->informationDetail,
            'product_informationenlargement' => $request->informationEnlargement,
            'product_desc' => $request->c_product_editor,
            'product_detail' => $request->MenuDetails,
            'product_image' => $request->picture,
            'isEnable' => 1,
        ]);
        return response()->json(['msg' => 'success'], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function singleProduct(Request $request)
    {
        $data = DB::table('wpanel_product_manage')->where('id', $request->id)->first();
        return response()->json(['msg' => 'success', 'data' => $data], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request)
    {
        LogActivity::addToLog('product Updated');
        $updated = DB::table('wpanel_product_manage')->where('id', $request->id);
        $updated->update([
            'product_classification' => $request->classification,
            'product_name' => $request->e_MenuName,
            'product_code' => $request->code,
            'product_price' => $request->price,
            'product_informationlist' => $request->informationList,
            'product_informationreduction' => $request->informationReduction,
            'product_informationdetail' => $request->informationDetail,
            'product_informationenlargement' => $request->informationEnlargement,
            'product_desc' => $request->e_product_editor,
            'product_detail' => $request->e_MenuDetails,
            'product_image' => $request->picture
        ]);
        return response()->json(['msg' => 'success'], 200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id){
        LogActivity::addToLog('product Deleted');
        DB::table('wpanel_product_manage')
        ->where('id', $id)
        ->update([
            'isEnable' => 0
        ]);

    return response()->json(['msg' => __('success')], 200);
    }
}

<?php

namespace Itwizard\Adminpanel\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class ProductCreateController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Admin::pages.products.product_modal');
    }
    public function CreateItem(Request $request)
    {
        dd( isset($request->is_sale) ? 1 : 0);
    }
    public function ProductCodeCheck(): \Illuminate\Http\JsonResponse
    {
        $rand = strrev(uniqid());
        $generatedCode = substr($rand.$rand.$rand,'0','10');
        $have = DB::table('main_products')->where('sku', $generatedCode)->first();
        if ($have === null) { return response()->json(['msg'=>'Code Non Duplicated','code'=> $generatedCode], 200); }
        return response()->json(['msg'=>'Code Duplicated','suggest'=> $generatedCode], 200);
    }

}

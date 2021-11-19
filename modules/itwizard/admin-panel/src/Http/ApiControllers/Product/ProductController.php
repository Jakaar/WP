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
}

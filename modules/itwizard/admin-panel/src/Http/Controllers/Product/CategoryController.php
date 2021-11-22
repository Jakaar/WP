<?php

namespace Itwizard\Adminpanel\Http\Controllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $items = \App\ProductCategory::where('is_active','!=',2)->where('parent_id',null)->orderby('order','asc')->get();
        return view('Admin::pages.products.category',[
            'items' => $items
        ]);
    }
}

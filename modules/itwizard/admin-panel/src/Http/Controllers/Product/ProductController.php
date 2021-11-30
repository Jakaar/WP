<?php

namespace Itwizard\Adminpanel\Http\Controllers\Product;

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
    public function index()
    {
        $items = DB::table('main_products')->paginate(20);
        $category = \App\ProductCategory::whereNull('parent_id')->where('is_active',1)->get();

        return view('Admin::pages.products.index', [
            'items' => $items,
            'category' => $category
        ]);
    }
}

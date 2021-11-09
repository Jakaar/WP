<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Product;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductCategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request)
    {

    }
}

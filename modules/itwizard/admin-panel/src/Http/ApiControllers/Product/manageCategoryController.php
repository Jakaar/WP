<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Product\manageCategoryController;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class manageCategoryController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
}

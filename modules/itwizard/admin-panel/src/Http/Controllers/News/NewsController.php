<?php

namespace Itwizard\Adminpanel\Http\Controllers\News;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('Admin::pages.news.index');
    }
    public function category(){

        return view('Admin::pages.news.category');
    }
}

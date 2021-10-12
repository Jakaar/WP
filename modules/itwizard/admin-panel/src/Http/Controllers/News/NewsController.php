<?php

namespace Itwizard\Adminpanel\Http\Controllers\News;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('Admin::pages.news.index');
    }
    public function category()
    {
        $data['categories'] = DB::table('wpanel_article_category')->get();
        foreach ($data['categories'] as $item)
        {
            $item->qty = DB::table('wpanel_articles')->where('category_id', $item->id)->count();

        }
//        dd($data);
        return view('Admin::pages.news.category', compact('data'));
    }
}

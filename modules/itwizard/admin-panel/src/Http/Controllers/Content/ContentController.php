<?php

namespace Itwizard\Adminpanel\Http\Controllers\Content;


use App\Category;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('Admin::pages.content.index');
    }
    public function menus(){
        $categories = Category::whereNull('category_id')
            ->where('isEnabled', 1)
            ->with('childrenCategories')
            ->get();
        $data['langs'] = DB::table('wpanel_available_language')->get();
//        dd($categories);
        return view('Admin::pages.user_menu.menu', compact('categories','data'));
    }
}

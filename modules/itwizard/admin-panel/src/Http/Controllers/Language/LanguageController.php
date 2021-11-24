<?php

namespace Itwizard\Adminpanel\Http\Controllers\Language;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $language=DB::table('wpanel_available_language')
        ->get();
        return view('Admin::pages.preferences.language',compact('language'));
    }
}
// 



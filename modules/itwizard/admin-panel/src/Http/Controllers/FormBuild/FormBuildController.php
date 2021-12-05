<?php

namespace Itwizard\Adminpanel\Http\Controllers\FormBuild;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class FormBuildController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $form_builded=DB::table('form_builded')->where('isEnabled', 1)->get();
        $categories=DB::table('categories') ->where('isEnabled', 1)->get();
        // dd($categories);
        return view('Admin::pages.form_builded.form_builded',compact('form_builded','categories'));

    }
}
//



<?php

namespace Itwizard\Adminpanel\Http\Controllers\FormMail;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class FormMailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        // $data = DB::table('wpanel_settings')->orderby('order', 'ASC')->get()->groupBy('group');
        // $group = DB::table('wpanel_settings')->select('group')->orderby('group', 'ASC')->groupBy('group')->get();
        $maildatas= DB::table('mail')
        ->where('isEnabled', 1)
        ->get();
        return view('Admin::pages.suppliers.formMail',compact('maildatas'));
    }

}



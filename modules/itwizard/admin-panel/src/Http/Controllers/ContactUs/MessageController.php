<?php

namespace Itwizard\Adminpanel\Http\Controllers\ContactUs;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class MessageController extends Controller
{
    public function index(){
        return view('Admin::pages.settings.users');
    }
}

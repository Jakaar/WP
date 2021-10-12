<?php

namespace Itwizard\Adminpanel\Http\Controllers\NoticeBoardManagement;

use Illuminate\Routing\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view('Admin::pages.noticeboardmanagement.index');
    }
}

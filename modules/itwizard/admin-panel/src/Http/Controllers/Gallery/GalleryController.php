<?php

namespace Itwizard\Adminpanel\Http\Controllers\Gallery;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        return view('Admin::pages.gallery.index');
    }
}

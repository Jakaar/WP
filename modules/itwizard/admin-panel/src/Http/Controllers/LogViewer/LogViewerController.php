<?php

namespace Itwizard\Adminpanel\Http\Controllers\LogViewer;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use File;

class LogViewerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id=auth()->user()->id;

        $files = File::get(storage_path('app/users/log/'.$id.'_LoginAttempts.log'));
        // dd($files);
        return view('Admin::pages.logviewer.index',compact('files'));
    }

}

<?php

namespace Itwizard\Adminpanel\Http\Controllers\StaticFile;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class StaticFileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $static_files = DB::table('static_file')
        ->select('static_file.id','static_file_type.type_name','static_file.file_absolute_path','static_file.status','static_file.created_at','static_file.updated_at')
        ->leftjoin('static_file_type','static_file_type.id','=','static_file.type_id')
        ->where('status','!=','0')
        ->get();
        return view('Admin::pages.static_file.index', compact('static_files'));
    }

}

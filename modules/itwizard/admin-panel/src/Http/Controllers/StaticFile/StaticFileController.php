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
        $static_files = DB::table('client_static_file')
        ->select('client_static_file.id','client_static_file_type.type_name','client_static_file.file_absolute_path','client_static_file.status','client_static_file.created_at','client_static_file.updated_at')
        ->leftjoin('client_static_file_type','client_static_file_type.id','=','client_static_file.type_id')
        ->where('status','!=','0')
        ->get();
        return view('Admin::pages.static_file.index', compact('static_files'));
    }

}

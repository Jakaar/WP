<?php
namespace Itwizard\Adminpanel\Http\Controllers\Page;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
class PageManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $datas = DB::table('wpanel_page_manage')
            ->where('isEnable', 1)
            ->get();
//      return $data;
//        return response()->json($data, 200);
        return view('Admin::pages.manage_pages.manage_pages',compact('datas'));

    }
}

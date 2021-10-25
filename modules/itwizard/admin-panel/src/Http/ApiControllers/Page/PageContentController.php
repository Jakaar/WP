<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Page;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PageContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function singlePage(Request $request)
    {
        return response()->json(['msg'=>'success'], 200);
    }
}

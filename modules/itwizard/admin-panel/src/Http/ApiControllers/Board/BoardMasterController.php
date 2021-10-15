<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Board;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BoardMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function create(Request $request)
    {
        return response()->json(['msg'=>__('Board Successfully Created')], 200);
    }
}

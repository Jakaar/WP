<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Content;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auth');

    }
    public function show(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json(['msg'=>'successs'], 200);
    }
    public function MenuGetData(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['msg'=>'success'], 200);
    }
}

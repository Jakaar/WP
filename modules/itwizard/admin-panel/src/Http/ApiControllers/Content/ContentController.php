<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Content;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json(['msg'=>__('success')], 200);
    }
    public function MenuGetData()
    {
        return response()->json(['msg'=>__('error'), 'data'=> $data], 200);
    }

}

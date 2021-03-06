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

    /**
     * @throws \Throwable
     */
    public function GetContentData(Request $request)
    {
        dd($request->all());
//        return response()
//            ->json([
//                'msg'=>__('success'),
//                'data' => view(
//                    'Admin::pages.content.'.$html,
//                    compact('data'))
//                    ->render()], 200);
//        return response()->json(['html'=>]);
    }

}

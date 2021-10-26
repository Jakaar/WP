<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Content;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
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
    public function DeleteMenu($id)
    {
        DB::table('categories')->where('id', $id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(200,200);
    }
    public function CreateMenu(Request $request)
    {
        return response()->json(['msg'=>__('success')] , 200);
    }

}

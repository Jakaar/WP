<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\News;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function delete($id)
    {
        try {
            DB::table('wpanel_article_category')->where('id', $id)->delete();
            return response()->json(['msg'=>__('success')],200);
        }
            catch (\Exception $exception)
        {
            return response()->json(['msg'=>__('error')],422);
        }
    }
}

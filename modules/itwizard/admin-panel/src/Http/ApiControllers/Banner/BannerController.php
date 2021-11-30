<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Banner;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Helper\LogActivity;
/**
 *
 */
class BannerController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addbanner(Request $request)
    {
        LogActivity::addToLog('Created Banner');
        DB::table('wpanel_banners')->insert([
            'group_name'=>$request->group_name,
            'code'=>$request->code,
            'banner_content'=>$request->editor,
            'priority'=>$request->priority,
            'daterange'=>$request->daterange,
            'slug'=>Str::slug($request->group_name),
            'target_type'=>$request->target_type,
            'type'=>$request->type,
            'isEnabled'=>$request->isEnabled,
        ]);
        return response()->json(['icon'=>__('success')] , 200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function DeleteBanner($id)
    {
        LogActivity::addToLog('Deleted Banner');
        DB::table('wpanel_banners')->where('id', $id)->update([
            'isEnabled' => 'deleted'
        ]);
        return response()->json(200,200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function editbanner($id)
    {
        LogActivity::addToLog('Edit Banner');
        $banner=DB::table('wpanel_banners')->find($id);
        return response()->json($banner);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateBanner(Request $request){
        LogActivity::addToLog('Updated Banner');
        DB::table('wpanel_banners')->where('id',$request->banner_id)->update([
            'group_name' => $request->group_name1,
            'code' => $request->code1,
            'banner_content'=>$request->ckeditor1,
            'priority'=>$request->priority1,
            'daterange'=>$request->daterange,
            'isEnabled'=>$request->isEnabled1,
            'target_type'=>$request->target_type1,
            'type'=>$request->type1,
            'slug'=>Str::slug($request->group_name1),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return response()->json(['msg'=>__('success')] , 200);
    }
}

<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Banner;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function addbanner(Request $request)
    {
               
        DB::table('banners')->insert([
            'group_name'=>$request->group_name,
            'code'=>$request->code,
            // 'image' => $request->file('avatar')->store('avatars', 'public'),
            'image'=>'image',
            'banner_content'=>$request->banner_content,   
            'design_method'=>$request->design_method,
            'priority'=>$request->priority,
            'link_address'=>$request->link_address,
            'active'=>$request->active,
            'slug'=>Str::slug($request->group_name),
            "created_at" =>  \Carbon\Carbon::now(), 
            "updated_at" => \Carbon\Carbon::now(), 
        ]);
        return response()->json(['icon'=>__('success')] , 200);
    }
    public function DeleteBanner($id)
    {
        DB::table('banners')->where('id', $id)->update([
            'active' => 'deleted'
        ]);
        return response()->json(200,200);
    }
    public function editbanner($id)
    {
        $banner=DB::table('banners')->find($id);
        return response()->json($banner);
    }
    public function updateBanner(Request $request){
        DB::table('banners')->where('id',$request->banner_id)->update([
            'group_name' => $request->group_name1,
            'code' => $request->code1,
            'image' => '',
            'banner_content'=>$request->banner_content1,
            'design_method'=>$request->design_method1,
            'priority'=>$request->priority1,
            'link_address'=>$request->link_address1,
            'active'=>$request->wheter1,
            'slug'=>Str::slug($request->group_name1),
            "updated_at" => \Carbon\Carbon::now(), 
            "created_at" => \Carbon\Carbon::now(),
        ]);

        return response()->json(['msg'=>__('success')] , 200);
        //return $request->all();
    }


    

  
}

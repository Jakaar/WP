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
            if($request->has('image'))
            {
                $image=$request->image;
            }
            else
            {
                $image='';
            }
            if($request->has('banner_content'))
            {
                $banner_content=$request->banner_content;
            }
            else
            {
                $banner_content='';
            }
            DB::table('wpanel_banners')->insert([
                'group_name'=>$request->group_name,
                'code'=>$request->code,
                'image'=>$image,
                'banner_content'=>$banner_content,   
                'design_method'=>$request->design_method,
                'priority'=>$request->priority,
                'link_address'=>$request->link_address,
                'isEnabled'=>$request->isEnabled,
                'slug'=>Str::slug($request->group_name),
                'daterange'=>$request->daterange,
                "created_at" =>  \Carbon\Carbon::now(), 
                "updated_at" => \Carbon\Carbon::now(), 
            ]);
            return response()->json(['icon'=>__('success')] , 200);         
    
    }
    public function DeleteBanner($id)
    {
        DB::table('wpanel_banners')->where('id', $id)->update([
            'isEnabled' => 'deleted'
        ]);
        return response()->json(200,200);
    }
    public function editbanner($id)
    {
        $banner=DB::table('wpanel_banners')->find($id);
        return response()->json($banner);
    }
    public function updateBanner(Request $request){
        if($request->has('image1'))
        {
            $image=$request->image1;
        }
        else
        {
            $image='';
        }
        if($request->has('banner_content1'))
        {
            $banner_content=$request->banner_content1;
        }
        else
        {
            $banner_content='';
        }
        DB::table('wpanel_banners')->where('id',$request->banner_id)->update([
            'group_name' => $request->group_name1,
            'code' => $request->code1,
            'image' => $image,
            'banner_content'=>$banner_content,
            'design_method'=>$request->design_method1,
            'priority'=>$request->priority1,
            'link_address'=>$request->link_address1,
            'isEnabled'=>$request->isEnabled1,
            'slug'=>Str::slug($request->group_name1),
            "updated_at" => \Carbon\Carbon::now(), 
            "created_at" => \Carbon\Carbon::now(),
        ]);

        return response()->json(['msg'=>__('success')] , 200);
        //return $request->all();
    }


    

  
}

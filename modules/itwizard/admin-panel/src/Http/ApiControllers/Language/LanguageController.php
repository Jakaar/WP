<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Language;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function createLanguage(Request $request)
    {
            DB::table('wpanel_available_language')->insert([
                'country'=>$request->country,
                'country_code'=>$request->country_code,
                'isEnabled'=> 1,
                'created_at'=> \Carbon\Carbon::now(),
            ]);
            return response()->json(['msg'=>__('success')] , 200);
    }

    public function deleteLanguage(Request $request)
    {
        // return $request->delete_id;
        DB::table('wpanel_available_language')->where('id', $request->delete_id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(200,200);
    }

    public function editLanguage(Request $request)
    {
        // return ($request->edit_language_id);
        $data = DB::table('wpanel_available_language')->where('id',$request->edit_language_id)->first();
        return response()->json(['msg' => __('success'),'data' => $data],200);
    }

    public function updateLanguage(Request $request){
        DB::table('wpanel_available_language')->where('id',$request->id)->update([
            'country'=>$request->country,
            'country_code'=>$request->country_code,
            'isEnabled'=>1,
            'updated_at'=> \Carbon\Carbon::now(),
        ]);
        return response()->json(['msg'=>__('success')] , 200);
    }




  
}

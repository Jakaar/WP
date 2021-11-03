<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Preferences;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PreferencesController extends Controller
{   
    public function create(Request $request)
    {
        \Artisan::call("config:cache");
        $model = DB::table('wpanel_settings')->insert([
            'display_name' => $request->name,
            'key' => $request->key,
            'type' => $request->type,
            'order' => 1,
            'group' => $request->group,
            'details' => $request->details,       
        ]);
        \Artisan::call("config:cache");
        return response()->json(['msg' => 'success', 'data' => $request->all()],200);
    }

    public function update(Request $request){

        for($i = 0; $i < count($request->all()); $i++){
            DB::table('wpanel_settings')->where('key',$request->input($i))->update([
                'value' => $request->input($i)['value']
            ]);
        }
        \Artisan::call("config:cache");
        return response()->json(['msg' => 'success'],200);
        
    }

    public function change(Request $request){
        DB::table('wpanel_settings')->where('id',$request->id)->update([
            'group' => $request->group,
        ]);
        return response()->json(['msg' => 'success'],200);
    }

    public function delete(Request $request){
        DB::table('wpanel_settings')->where('id',$request->id)->delete();
        return response()->json(['msg' => 'success'],200);
    }
}

<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Preferences;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Helper\LogActivity;

class PreferencesController extends Controller
{   
    public function create(Request $request)
    {
       try{
        LogActivity::addToLog('Created Preferences');
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
        
        return response()->json(['msg' => 'success'],200);
       }
       catch(\Exception $e){
        return response()->json(['msg' => $e]);
       }    
    }

    public function update(Request $request){
        LogActivity::addToLog('Preferences Updated');

        for($i = 0; $i < count($request->all()); $i++){
            DB::table('wpanel_settings')->where('key',$request->input($i))->update([
                'value' => $request->input($i)['value']
            ]);
        }
        \Artisan::call("config:cache");
        return response()->json(['msg' => 'success','data' => $request->all()],200);
        
    }

    public function change(Request $request){
        LogActivity::addToLog('Preferences Changed Group');
        DB::table('wpanel_settings')->where('id',$request->id)->update([
            'group' => $request->group,
        ]);
        return response()->json(['msg' => 'success'],200);
    }

    public function delete(Request $request){
        LogActivity::addToLog('Deleted Preferences');
        DB::table('wpanel_settings')->where('id',$request->id)->delete();
        return response()->json(['msg' => 'success'],200);
    }
}

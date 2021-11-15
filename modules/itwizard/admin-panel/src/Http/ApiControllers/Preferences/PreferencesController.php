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
        try {
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

            return response()->json(['msg' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['msg' => $e]);
        }
    }

    public function update(Request $request)
    {
        LogActivity::addToLog('Preferences Updated');

        for ($i = 0; $i < count($request->all()); $i++) {
            DB::table('wpanel_settings')->where('key', $request->input($i))->update([
                'value' => $request->input($i)['value']
            ]);
        }
        \Artisan::call("config:cache");
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }

    public function change(Request $request)
    {
        LogActivity::addToLog('Preferences Changed Group');
        DB::table('wpanel_settings')->where('id', $request->id)->update([
            'group' => $request->group,
        ]);
        return response()->json(['msg' => 'success'], 200);
    }

    public function delete(Request $request)
    {
        LogActivity::addToLog('Deleted Preferences');
        DB::table('wpanel_settings')->where('id', $request->id)->delete();
        return response()->json(['msg' => 'success'], 200);
    }

    public function menuCreate(Request $request)
    {
        
        try {
            $model = new \App\AdminMenu;
            $model->title = $request->title;
            $model->url = $request->url;
            $model->icon = $request->icon;
            $model->save();
            LogActivity::addToLog('Created Menu');
            return response()->json(['msg' => 'success'], 200);
            
        } catch (\Exception $e) {
            return response()->json(['msg' => $e]);
        }
    }

    public function menuSingle(Request $request){
        $model = \App\AdminMenu::where('id',$request->id)->first();

        return response()->json(['msg' => 'success','data' => $model], 200);
    }

    public function menuUpdate(Request $request)
    {
        try {
            $data = $request->all();
            for ($i = 0; $i < count($data); $i++) {
                $parent_id = null;
                if (isset($data[$i]['parent_id'])) {
                    $parent_id = $data[$i]['parent_id'];
                }
                \DB::table('admin_menus')->where('id', $data[$i]['id'])->update([
                    'parent_id' => $parent_id,
                    'order' => $data[$i]['order'],
                ]);
            }
            LogActivity::addToLog('Menu Changed Order');
            return response()->json(['msg' => 'success'], 200);
        } catch (\Exception $e) {

            return response()->json(['msg' => $e]);
        }
    }

    public function menuDelete(Request $request){
        $model = \App\AdminMenu::find($request->id);
        $model->is_active = 0;
        $model->save();
        LogActivity::addToLog('Deleted Menu');
        return response()->json(['msg' => 'success'], 200);
    }

    public function menuUpdates(Request $request){
        LogActivity::addToLog('Updated Menu');
        $model = \App\AdminMenu::find($request->id);
        $model->title = $request->title;
        $model->url = $request->url;
        $model->icon = $request->icon;
        $model->save();
        return response()->json(['msg' => 'success'], 200);
    }

}

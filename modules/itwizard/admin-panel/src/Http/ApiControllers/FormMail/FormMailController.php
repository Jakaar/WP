<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\FormMail;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Helper\LogActivity;

class FormMailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // formMail last 

    public function formMailEdit(Request $request)
    {
        
      
        $data = DB::table('form_mail')->where('id',$request->form_group_id)->first();
        // dd( $data);
        return response()->json(['msg' => __('success'),'data' => $data],200);
    }
    public function formmailview($id)
    {
    
        $formmailview=DB::table('mail')->find($id);
        return response()->json($formmailview);
    }

    public function addform(Request $request)
    {
        dd($request->all());
        // foreach ($request->all() as $key => $value) {
        //     DB::table('form_mail')->insert([
        //         'value' => $request->name($key)['value']
        //     ]);
        // }
        return response()->json(['icon'=>__('success')] , 200);
    }

    public function formMailUpdate(Request $request){
        LogActivity::addToLog('Preferences Updated');

        // return $request->all();

        for ($i = 0; $i < count($request->all()); $i++) {
            DB::table('form_mail')->where('id', $request->input($i))->update([
                'value' => $request->input($i)['value']
            ]);
        }
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);

     
    }
 // formMail last end



  
}

<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function update(Request $request)
    {
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }

    public function delete(Request $request){
        $model = DB::table('users')->where('id',$request->user_id);
        $model->delete();
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }

    public function singleUserData(Request $request){
        $data = DB::table('users')->where('id',$request->id)->first();
        return response()->json(['msg' => 'success', 'data' => $data ], 200);
    }
}

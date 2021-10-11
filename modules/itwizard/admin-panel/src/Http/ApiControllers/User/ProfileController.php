<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        return response()->json(['msg'=>'success', 'data'=>$request->all()], 200);
    }
}

<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Upload;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class UploadController extends Controller
{
    //
    public function FromCK(Request $request)
    {
//        dd($request->all());
        return response()->json(['uploaded'=>true, 'fileName'=>'xxxxcx.jpg','url'=>'/client/static/img/faces/team-2.jpg'], 200);
    }
}

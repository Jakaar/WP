<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Upload;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class UploadController extends Controller
{
    //
    public function FromCK(Request $request)
    {
        $file = $request->file('upload');
        $sName = $file->store('/ckfiles/img','public');
        return response()->json(['uploaded'=>true, 'fileName'=>'ck','url'=>asset('storage/'.$sName)], 200);
    }
    public function FromCKImage(Request $request)
    {
        $file = $request->file('upload');
        $sName = $file->store('/ckfiles/img','public');
        return response()->json(['uploaded'=>true, 'fileName'=>'ck','url'=>asset('storage/'.$sName)], 200);
    }
}

<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SiteInfoController extends Controller
{
    public function update(Request $request)
    {

        return response()->json(['msg'=>__('success')], 200);
    }
}

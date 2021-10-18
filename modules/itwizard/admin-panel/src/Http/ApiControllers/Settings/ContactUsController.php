<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ContactusController extends Controller
{
    public function update(Request $request)
    {
        $savedContact = DB::table('wpanel_contact_us')->take(1);
        $savedContact->update([
            'title' => $request->title,
            'email' => $request->email,
            'phone' => $request->phone,
            'short_content' => $request->short_content,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
        ]);
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }
}

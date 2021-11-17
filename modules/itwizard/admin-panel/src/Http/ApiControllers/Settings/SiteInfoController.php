<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\LogActivity;

class SiteInfoController extends Controller
{
    public function update(Request $request)
    {
        LogActivity::addToLog('Updated SiteInfo');
        $savedInfo = DB::table('wpanel_site_info')->take(1);
        // dd($request);
        // dd($request->companyName);
        $savedInfo->update([
            'company_name' => $request->companyName,
            'site_name' => $request->siteName,
            'fax' => $request->fax,
            'company_register_number' => $request->companyRegister,
            'personal_information_manager' => $request->personalInformation,
            'address' => $request->address,
            'phone_number' => $request->phone,
            'email' => $request->email,
            'site_copyright' => $request->copyright,
            'logo' => $request->logo,
            'terms_of_condition' => $request->c_product_editor,
            'privacy' => $request->e_product_editor,
        ]);

        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }
}

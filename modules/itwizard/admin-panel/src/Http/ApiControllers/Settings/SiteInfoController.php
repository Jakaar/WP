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
            'terms_of_condition_name_url' => $request->c_product_editor,
            'privacy_name_url' => $request->e_product_editor,
            // 'terms_of_condition' => $request->c_product_editor,
            // 'privacy' => $request->e_product_editor,
        ]);

        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }

    public function termsUpdate(Request $request)
    {
        $savedInfo = DB::table('wpanel_site_info')->take(1);

        $savedInfo->update([
            'terms_of_condition'=> $request->termsdata
        ]);
        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }

    public function privacyUpdate(Request $request)
    {
        // dd($request->all());
        $savedInfo = DB::table('wpanel_site_info')->take(1);
        
        $savedInfo->update([
            'privacy'=> $request->privacydata
        ]);

        return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
    }
   
}

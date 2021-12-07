<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\FAQ;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\LogActivity;
use Carbon\Carbon;

class QAAController extends Controller
{
    public function answer(Request $request){

       $model = \DB::table('client_form_data')->where('id',$request->id)->update([
            'is_active' => $request->status,
            'answer' => $request->answer,
       ]);
    }
    
}

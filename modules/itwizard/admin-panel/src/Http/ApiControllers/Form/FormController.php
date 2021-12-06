<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Form;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\LogActivity;
use Carbon\Carbon;
class FormController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
// dd($request->url);
        $namepieces = explode('/', $request->url);

        $category_slug_id1 = implode(' ', array( $namepieces[count($namepieces)-1]));
        $board_master_id2 = implode(' ', array($namepieces[count($namepieces)-2]));
// dd($category_slug_id1,$board_master_id2 );

        if($request->status == "on") {
            $status=1;
        }else{
            $status=0;
        }

        if($request->receive_email === "on") {
            $receive_email=1;
        }else{
            $receive_email=0;
        }
        // dd( $receive_email);

        DB::table('form_builded')->insert([
            'form_name'=>$request->name,
            'is_status'=>$status,
            'receive_email'=>$receive_email,
            'data'=>$request->data,
            'board_master_id'=>$board_master_id2,
            'category_id'=>$category_slug_id1,
            'isEnabled'=>1,
            'created_at'=> \Carbon\Carbon::now(),
        ]);
        return response()->json(['msg'=>__('success')] , 200);
    }
    public function delete(Request $request)
    {
        // dd( $request->delete_id);
        DB::table('form_builded')->where('id', $request->delete_id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(200,200);
    }
    public function edit(Request $request)
    {
        $data = DB::table('form_builded')->where('id',$request->edit_id)->first();
        return response()->json(['msg' => __('success'),'data' => $data],200);
    }

    public function update(Request $request){
// dd($request->all());
            $namepieces = explode('/', $request->url);
            $category_slug_id1 = implode(' ', array( $namepieces[count($namepieces)-1]));
            $board_master_id2 = implode(' ', array($namepieces[count($namepieces)-2]));

            if($request->status == "on") {
                $status=1;
            }else{
                $status=0;
            }

            if($request->receive_email === "on") {
                $receive_email=1;
            }else{
                $receive_email=0;
            }


        DB::table('form_builded')->where('id',$request->id)->update([
            'form_name'=>$request->name,
            'is_status'=>$status,
            'receive_email'=>$receive_email,
            'data'=>$request->data,
            'board_master_id'=>$board_master_id2,
            'category_id'=>$category_slug_id1,
            'isEnabled'=>1,
            'created_at'=> \Carbon\Carbon::now(),
        ]);
        return response()->json(['msg'=>__('success')] , 200);
    }


}

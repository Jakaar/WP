<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\FAQ;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\LogActivity;
use function GuzzleHttp\Promise\all;
use Carbon\Carbon;
class FAQController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
//        dd($request->all());
        try {
            DB::table('main__f_a_q')->insert([
                'answer'=> $request->answer,
                'question'=> $request->question,
                'board_master_id' => $request->board_master_id,
                'category_id'=> explode('/',$request->url)[5],
            ]);

            return back()->with('message',__('FAQ Created'));
        }catch(\Exception $exception)
        {
            return $exception;
        }

    }
    public function delete($id)
    {
//        dd($id);
        DB::table('main__f_a_q')
            ->where('id', $id)
            ->update(['is_enable' => 0]);
        return response()->json(['msg', __('success')], 200);
    }
    
    public function edit(Request $request)
    {
        // dd($request->edit_id);
        $data = DB::table('main__f_a_q')->where('id',$request->edit_id)->first();
        return response()->json(['msg' => __('success'),'data' => $data],200);
    }
    public function update(Request $request){
        // dd($request->all());
            DB::table('main__f_a_q')->where('id',$request->id)->update([
                'answer'=>$request->answer,
                'question'=>$request->question,
                'updated_at'=> \Carbon\Carbon::now(),
            ]);
            return back()->with('updated',__( $request->question." Has Been Updated" ));
      
    }

}

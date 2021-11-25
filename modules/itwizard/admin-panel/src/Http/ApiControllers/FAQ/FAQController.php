<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\FAQ;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Helper\LogActivity;
use function GuzzleHttp\Promise\all;

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
}

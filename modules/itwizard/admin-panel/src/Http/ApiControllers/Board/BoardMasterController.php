<?php
namespace Itwizard\Adminpanel\Http\ApiControllers\Board;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BoardMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function create(Request $request)
    {
        DB::table('wpanel_board_master')->insert([
            'board_name' => $request->BoardName,
            'board_type' => $request->BoardType,
            'isComment'=>$request->isComment,
            'isReply'=>$request->isReply,
            'isRegister'=>$request->isRegister,
            'isRating'=>$request->isRating,
            'isFile'=>$request->isFile,
            'isBoard'=>$request->isBoard,
            'isCategory'=>$request->isCategory,
            'isEnabled'=>$request->isEnabled,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
        return response()->json(['msg'=>__('Board Successfully Created')], 201);

    }
    public function editboard($id)
    {
        $banner=DB::table('wpanel_board_master')->find($id);
        return response()->json($banner);
    }
    public function DeleteBoard($id)
    {
        // DB::table('wpanel_board_master')->where('id', $id)->delete();
        // return response()->json(200,200);

        DB::table('wpanel_board_master')->where('id', $id)->update([
            'isEnabled' => '0'
        ]);
        return response()->json(200,200);
    }
    public function updateBoard(Request $request){
        DB::table('wpanel_board_master')->where('id',$request->board_id)->update([
            'board_name' => $request->board_name1,
            'board_type' => $request->board_type1,
            'isComment'=>$request->isComment1,
            'isReply'=>$request->isReply1,
            'isRegister'=>$request->isRegister1,
            'isRating'=>$request->isRating1,
            'isFile'=>$request->isFile1,
            'isBoard'=>$request->isBoard1,
            'isCategory'=>$request->isCategory1,
            'isEnabled'=>$request->isEnabled1,
        ]);
        return response()->json(['msg'=>__('success')] , 200);
    }
    
}

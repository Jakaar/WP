<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\Mail;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

 
    public function mailCreate(Request $request)
    {
        // dd($request->content);
            DB::table('mail')->insert([
                'title'=>$request->title,
                'content'=>$request->content,
                'status'=>0,
                'isEnabled'=> 1,
                'created_at'=> \Carbon\Carbon::now(),
            ]);
            return response()->json(['msg'=>__('success')] , 200);
    }
    public function mailDelete(Request $request)
    {
        DB::table('mail')->where('id', $request->delete_id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(200,200);
    }
    public function mailEdit(Request $request)
    {
        $data = DB::table('mail')->where('id',$request->main_edit_id)->first();
        return response()->json(['msg' => __('success'),'data' => $data],200);
    }
    public function mailUpdate(Request $request){
        DB::table('mail')->where('id',$request->id)->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'status'=>1,
            'isEnabled'=>1,
            'updated_at'=> \Carbon\Carbon::now(),
        ]);
        return response()->json(['msg'=>__('success')] , 200);
    }






    public function mailSend(Request $request){
        $value=array();
// return $request->select_email;

        if($request->all_mail!='0'|| $request->subscribe==2 ){
            $tableData = DB::table('users')-> select('email')->get();
           
            foreach ($tableData as $tableData) {
                array_push($value,$tableData->email);
            }
            $tableData=$value;
        } else if($request->select_email!=Null){


            $tableData= $request->select_email;

                foreach ($tableData as $tableData) {
                    array_push($value,$tableData);
                }
            $tableData=$value;
            





        } else if($request->subscribe==1){
          
            $tableData = DB::table('users')->where('subscribed',$request->subscribe)->get();
            // dd($tableData);
            foreach ($tableData as $tableData) {
                array_push($value,$tableData->email);
            }
            $tableData=$value;
        } 


        if($request->input_email!=Null){
            $tableData =$request->input_email;
                array_push($value,$tableData);
            $tableData=$value;
        } 
      
        // return $tableData;
       
        
        
         $data = DB::table('mail')->where('id',$request->send_id)->first();
         
         $subject=$data->title;
            $data= ['title'=>$data->title, 'content'=>$data->content];
          
            Mail::send('Admin::pages.suppliers.sent_file', $data, function($message) use ($tableData, $subject) {
                $message->to( $tableData);
                $message->subject($subject );
                $message->from('n.buynhishig@gmail.com', 'itwizard');
                // $message->from(env('MAIL_FROM_ADDRESS'), env('ORG_NAME'));


            });
            return response()->json(['msg'=>__('success')] , 200);
    }
  
}

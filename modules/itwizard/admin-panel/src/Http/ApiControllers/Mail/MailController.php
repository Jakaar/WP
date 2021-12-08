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
    //

    // public function mailCreate(Request $request)
    // {
    //     // dd($request->content);
    //         DB::table('mail')->insert([
    //             'title'=>$request->title,
    //             'content'=>$request->content,
    //             'status'=>0,
    //             'isEnabled'=> 1,
    //             'created_at'=> \Carbon\Carbon::now(),
    //         ]);
    //         return response()->json(['msg'=>__('success')] , 200);
    // }
    public function mailDelete(Request $request)
    {
        DB::table('mail')->where('id', $request->delete_id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(200, 200);
    }
    public function mailEdit(Request $request)
    {
        $data = DB::table('mail')->where('id', $request->main_edit_id)->first();
        return response()->json(['msg' => __('success'), 'data' => $data], 200);
    }
    public function mailUpdate(Request $request)
    {
        DB::table('mail')->where('id', $request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'status' => 1,
            'isEnabled' => 1,
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        return response()->json(['msg' => __('success')], 200);
    }






    public function mailSend(Request $request)
    {

        $value = array();
        if ($request->all_mail != '0' || $request->subscribe == 2) { //check all mail
            $tableData = DB::table('users')->select('email')->get();

            foreach ($tableData as $tableData) {
                array_push($value, $tableData->email);
            }
            $tableData = $value;
        } else if ($request->select_email != Null) { //multi select email

            $tableData = $request->select_email;

            foreach ($tableData as $tableData) {
                array_push($value, $tableData);
            }
            $tableData = $value;
        } else if ($request->subscribe == 1) {

            $tableData = DB::table('users')->where('subscribed', $request->subscribe)->get();
            foreach ($tableData as $tableData) {
                array_push($value, $tableData->email);
            }
            $tableData = $value;
        }


        if ($request->input_email != Null) { //input email
            $tableData = $request->input_email;
            array_push($value, $tableData);
            $tableData = $value;
        }

        // return $tableData;

        $data = DB::table('client_form_data')->where('id', $request->send_id)->first();

        $subject = 'Question Answer';
        $data = ['title' => 'Question Answer', 'content' => $data->answer];

        Mail::send('Admin::pages.suppliers.sent_file', $data, function ($message) use ($tableData, $subject) {
            $message->to($tableData);
            $message->subject($subject);
            $message->from('n.buynhishig@gmail.com', 'itwizard');
            // $message->from(env('MAIL_FROM_ADDRESS'), env('ORG_NAME'));
        });
        return response()->json(['msg' => __('success')], 200);
    }


    public function client_data_delete(Request $request)
    {
        DB::table('client_form_data')->where('id', $request->delete_id)->update([
            'isEnabled' => 0
        ]);
        return response()->json(200, 200);
    }

    public function client_view($id)
    {
        // $data = DB::table('client_form_data')
        // ->where('client_form_data.id',$id)
        // ->leftJoin('form_builded', 'client_form_data.form_id', '=', 'form_builded.id')
        // ->first();

        // $data = DB::table('client_form_data')
        //     ->where('client_form_data.id', $id)
        //     ->leftJoin('form_builded', 'form_builded.id', '=', 'client_form_data.form_id')
        //     ->leftJoin('client_form_data_file', 'client_form_data_file.client_form_data_id', '=', 'client_form_data.id')
        //     ->first();

        return $data = \App\formData::with(['builder','files'])->where('id',$id)->first();

        dd($data);


        $js = [];
        array_push($js, json_decode($data->content));
        $data->content = $js;
        $processing = json_decode($data->data);

        $settingValue = [];
        foreach ($data->content[0] as $ka => $j) {
            if (explode('-', $ka)[0] === 'button' || explode('-', $ka)[0] === 'header') {
            } else {
                array_push($settingValue, $j);
            }
        }

        $tooluur = 0;
        foreach ($processing as $key => $item) {
            // dd($item->type);
            if ($item->type === 'button' || $item->type === "header") {
            } else if ($item->type === 'select') {
                if ($item->multiple === true) {
                    foreach ($settingValue[$tooluur]  as $key => $v) {
                        // dd($v);
                        foreach ($item->values as $key => $val) {
                            if ($val->value == $v) {
                                $val->selected = true;
                            } else {

                                //esreg tohioldold busdad false utga ogoh

                            }
                        }
                    }
                } else {
                    $item->value = $settingValue[$tooluur];
                    $tooluur++;
                }
            }
            // else if($item->type === 'file'){
            //     $data->file = $item->file_path;
            // }
            else {
                if (isset($settingValue[$tooluur])) {
                    $item->value = $settingValue[$tooluur];
                    $tooluur++;
                }
            }
        }



        $data->data = json_encode($processing);
        dd($data);

        


        return response()->json(['msg' => __('success'), 'data' => $data], 200);
    }
}

<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\StaticFile;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Helper\LogActivity;

class StaticFileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addfile(Request $request)
    {
        LogActivity::addToLog('Created File');
        $type=$request->upload_file->getClientOriginalExtension();
        $typeget = DB::table('client_static_file_type')->where('type_name', $type)->first();
        if($typeget != null)
        {
            $file = $request->file('upload_file');
            $saveName = uniqid('client_');
            $fileExt = $file->getClientOriginalExtension();
            $lastName = $saveName.'.'.$fileExt;
            $file->move(public_path('client/static/'.$fileExt),$saveName.'.'.$fileExt);
            DB::table('client_static_file')->insert([
                'type_id'=>$typeget->id,
                'file_absolute_path'=>'client/static/'.$fileExt.'/'.$lastName,
                'status'=>$request->status,
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
        }
        else
        {
            DB::table('client_static_file_type')->insert([
                'type_name'=>$type,
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
            $insert_id1=DB::getPdo()->lastInsertId();
            $file = $request->file('upload_file');

            $saveName = uniqid('client_');
            $fileExt = $file->getClientOriginalExtension();

            $lastName = $saveName.'.'.$fileExt;
            $file->move(public_path('client/static/'.$fileExt),$saveName.'.'.$fileExt);
            DB::table('client_static_file')->insert([
                'type_id'=>$insert_id1,
                'file_absolute_path'=>'client/static/'.$fileExt.'/'.$lastName,
                'status'=>$request->status,
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" => \Carbon\Carbon::now(),
            ]);
        }
        return response()->json(['icon'=>__('success')] , 200);
    }
    public function DeleteStaticFile($id)
    {
        LogActivity::addToLog('Deleted File');
        DB::table('client_static_file')->where('id', $id)->update([
            'status' => '0'
        ]);
        return response()->json(200,200);
    }
    public function editStaticFile($id)
    {
        LogActivity::addToLog('Edit File');
        $banner=DB::table('client_static_file')->find($id);
        return response()->json($banner);
    }
    public function updateStaticFile(Request $request){
        //return $request->all();
        LogActivity::addToLog('Updated File');
        $updated = DB::table('client_static_file')->where('id', $request->file_id);


        if ($request->file('upload_file1'))
        {
            $type=$request->upload_file1->getClientOriginalExtension();
            $typeget = DB::table('client_static_file_type')->where('type_name', $type)->first();
            if($typeget != null)
            {

                $insert_id=$typeget->id;
                $file = $request->file('upload_file1');

                $saveName = uniqid('client_');
                $fileExt = $file->getClientOriginalExtension();

                // $insert_id = $typeget->id;
                $lastName = $saveName.'.'.$fileExt;
                $file->move(public_path('client/static/'.$fileExt),$saveName.'.'.$fileExt);
                $updated->update([
                    'type_id'=>$insert_id,
                    'file_absolute_path'=>'client/static/'.$fileExt.'/'.$lastName,
                    'status' => $request->status1,
                ]);
                return response()->json(['icon'=>__('success')] , 200);
            }
            else
            {
                $type=$request->upload_file1->getClientOriginalExtension();
                DB::table('client_static_file_type')->insert([
                    'type_name'=>$type,
                    "created_at" =>  \Carbon\Carbon::now(),
                    "updated_at" => \Carbon\Carbon::now(),
                ]);
                $insert_id = DB::getPdo()->lastInsertId();
                $file = $request->file('upload_file1');

                $saveName = uniqid('client_');
                $fileExt = $file->getClientOriginalExtension();

                // $insert_id = $typeget->id;
                $lastName = $saveName.'.'.$fileExt;
                $file->move(public_path('client/static/'.$fileExt),$saveName.'.'.$fileExt);
                $updated->update([
                    'type_id'=>$insert_id,
                    'file_absolute_path'=>'client/static/'.$fileExt.'/'.$lastName,
                    'status' => $request->status1,
                ]);
                return response()->json(['icon'=>__('success')] , 200);
            }
        }
        else
        {
            //dd($request->all());
            $updated->update([
                'status' => $request->status1,
                "updated_at" => \Carbon\Carbon::now(),
            ]);
            return response()->json(['icon'=>__('success')] , 200);
        }

    }
}

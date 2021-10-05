<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['contact_us'] = DB::table('wpanel_contact_us')
            ->first();
        return view('admin::settings.contact-us', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function contact_us(Request $request)
    {
        try {
            DB::table('wpanel_contact_us')
//                ->where('id', 1)
                ->updateOrInsert(['id'=>1],[
                'title'=> $request->title,
                'email'=> $request->email,
                'phone'=> $request->phone,
                'short_content'=> $request->short_content,
                'address'=> $request->address,
                'facebook'=> $request->facebook,
                'youtube'=> $request->youtube,
                'twitter'=> $request->twitter,
                'linkedin'=> $request->linkedin,
            ]);
            return response()->json(['msg'=>'success'],200);
        }catch (\Exception $exception){
            return response()->json(['msg'=>'error'], 422);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin::settings.contact-us-inbox');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

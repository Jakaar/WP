<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        return view('client.pages.index');
    }
    public function viewer($id, $slug)
    {
//        dd($id, $slug);
        $temp = DB::table('wpanel_board_master')->where('id', $id)->first();
        if ($temp)
        {
//            $dump = DB::table('wpanel_board_data')->dd();
            $boardData = DB::table('wpanel_board_data')
//                ->where('board_master_id', $temp->id)
                ->where('category_id', $slug)
                ->get();

            $data['options'] = $temp;

            if (count($boardData) > 1) {
                foreach ($boardData as $item) {
                    $translating = json_decode($item->content, true);
                    $item->content = $translating[Session::get('locale')];
                }
                $data['board'] = $boardData;
            } else if (count($boardData) == 0) {
                $data['board'] = null;
            }else if (count($boardData) <= 1){
                $translating = json_decode($boardData[0]->content, true);
                $boardData[0]->content = $translating[Session::get('locale')];
                $data['board'] = $boardData[0];
            }
//            dd($data);

            if (isset($data['board']->isSubCategory))
            {
                $data['options']->board_type = 'SinglePage';
                return view($this->compiler($data, $temp),  compact('data'));
            }
            if ($data['board'] == null)
                return view('client.errors.404');
            return view($this->compiler($data, $temp),  compact('data'));
        }else{
            $temp = (object) null;
            $temp->board_type = 'empty';
            return view($this->compiler('',$temp));
        }

    }
    public function compiler($data, $temp): string
    {
        if (View::exists('client.pages.'.$temp->board_type)) {
            return 'client.pages.'.$temp->board_type;
        }
        return 'client.errors.404';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        //
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

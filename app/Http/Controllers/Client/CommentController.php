<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Query\Builder|\Illuminate\Http\Response|object
     */
    public function isComment($id, $postId = null)
    {
//        dd($postId);
        $check = DB::table('main__category')->where('id', $id)->select('board_master_id')->first();
        $isComment = DB::table('wpanel_board_master')->where('id', $check->board_master_id)->first();
        if ($isComment->isComment)
        {
            $isComment->data = DB::table('_comments')
                ->where('_comments.post_id', $postId)
                ->whereNull('parent_id')
                ->leftJoin('users', 'users.id','=','_comments.user_id')
                ->select([
                    '_comments.id',
                    '_comments.comment',
                    '_comments.created_at',
                    'users.firstname',
                    'users.lastname',
                    'users.avatar',
                ])
                ->get();
            foreach ($isComment->data as $childComments)
            {
                $childComments->childs = DB::table('_comments')
                    ->where('parent_id', $childComments->id)
                    ->leftJoin('users', 'users.id','=','_comments.user_id')
                    ->select([
                        '_comments.id',
                        '_comments.comment',
                        '_comments.created_at',
                        'users.firstname',
                        'users.lastname',
                        'users.avatar',
                    ])
                    ->get();
                if ($childComments->childs)
                {
                    foreach ($childComments->childs as $childComments2)
                    {
                        $childComments2->childs = DB::table('_comments')
                            ->where('parent_id', $childComments2->id)
                            ->leftJoin('users', 'users.id','=','_comments.user_id')
                            ->select([
                                '_comments.id',
                                '_comments.comment',
                                '_comments.created_at',
                                'users.firstname',
                                'users.lastname',
                                'users.avatar',
                            ])
                            ->get();
                    }
                }
            }
//            dd($isComment->data);
            return $isComment;
        }
//        dd('no');
        return null;
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

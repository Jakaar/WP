<?php

namespace Itwizard\Adminpanel\Http\Controllers\Mail;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $datas['mailData'] = DB::table('mail')
        ->where('isEnabled', 1)
        ->get();

        $datas['roles'] = DB::table('roles')
        ->select(
            'name',
            'id'
        )
        ->get();
        foreach($datas['roles'] as $item)
        {
            $item->roles = DB::table('role_user')
            ->where('role_id', $item->id)
            ->leftJoin('users','users.id','=','role_user.user_id')
            ->select(
                'role_user.user_id',
                'role_user.role_id',
                'users.email',
                'users.id'
            )
            ->get();
        }
        // dd($datas);
        return view('Admin::pages.suppliers.index', compact('datas'));

    }
    public function CreateShow()
    {
        return view('Admin::pages.suppliers.create_form_mail');
    }

}

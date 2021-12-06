<?php

namespace Itwizard\Adminpanel\Http\Controllers\Users;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    public function Member()
    {
        $users = DB::table('users')->orderby('id','ASC')
            ->where('user_type', '=','customer')
            ->where('isEnabled',1)
            ->get();
        // dd($users);

        return view('Admin::pages.users.member', compact('users'));

    }
}

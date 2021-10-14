<?php

namespace Itwizard\Adminpanel\Http\ApiControllers\User;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Ganaa
    public function update(Request $request)
    {
        try {
            $updated = DB::table('users')->where('id', auth()->user()->id);

            $pw = auth()->user()->password;

            $hashed = $request->confirm_password;

            if (Hash::check($hashed, $pw)) {
                if ($request->hasFile('avatar')) {
                    $updated->update([
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                        'avatar' => $request->file('avatar')->store('avatars', 'public'),
                    ]);
                } else {
                    $updated->update([
                        'firstname' => $request->firstname,
                        'lastname' => $request->lastname,
                    ]);
                }
            } else {
                return response()->json(['msg'=>'password missmatch'],200);
            }
            return response()->json(['msg' => 'success', 'data' => $request->all()], 200);
        } catch (\Exception $e) {
            return 'catch';
        }
    }

    //password update Nurbolat
    public function updatePassword(Request $request)
    {
        try {
            $updated = DB::table('users')->where('id', auth()->user()->id);

            $pw = auth()->user()->password;

            $hashed = $request->current_password;

            if (Hash::check($hashed, $pw)) 
            {
                $updated->update([
                    'password' => bcrypt($request->new_password),
                ]);
            } 
            else 
            {
                echo 'password missmatch';
            }
            return response()->json(['msg' => 'success'], 200);
        } catch (\Exception $e) {
            return response()->json(['msg'=> __('error')]);
        }        
    }
    

  
}

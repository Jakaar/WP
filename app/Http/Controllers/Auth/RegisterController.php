<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function registerForm(){
        return view('client.auth.register');
    }


    public function store(Request $request)
    {
            $request->isEnabled = 1;
            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'phone'  => $request->phone,
                'user_type' => 'customer',
                'birthdate' => $request->birthdate,
                'sex' => $request->sex,
                'isEnabled'  => 1
            ]);
            auth()->login($user);

        return redirect()->to('/');
    }

    public function checkUser(Request $request)

    {
        $user_phone = \App\User::where('phone',$request->phone)->count();
        // dd($user_phone);
        $user_email = \App\User::where('email',$request->email)->count();
        
        if($user_phone == 1)
        {
            return response()->json(['icon' => 'danger', 'msg' => 'This number already registered']);
        }
        if($user_email == 1)
        {
          return response()->json(['icon' => 'danger', 'msg' => 'This email already registered']);
        }
        return response()->json(['msg' => true]);
        //     $request->isEnabled = 1;
        //     $user = User::create([
        //         'firstname' => $request->firstname,
        //         'lastname' => $request->lastname,
        //         'email' => $request->email,
        //         'password' => bcrypt($request->password),
        //         'phone'  => $request->phone,
        //         'user_type' => 'customer',
        //         'birthdate' => $request->birthdate,
        //         'sex' => $request->sex,
        //         'isEnabled'  => 1
        //     ]);
        //     auth()->login($user);
        //     return redirect()->to('/');
        // // $phone_check = DB::table('users')->where('phone',$request->phone)->first();
    }

    public function rules()
    {
        return [
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users'
        ];
    }
}

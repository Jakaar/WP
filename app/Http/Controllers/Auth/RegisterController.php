<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
//      dd($request->all());
//        $this->validate(request->all(), [
//            'firstname' => 'required',
//            'lastname' => 'required',
//            'email' => 'required|email',
//            'password' => 'required'
//        ]);

//        $validated = $request->validate([
//            'firstname' => 'required',
//            'lastname' => 'required',
//            'email' => 'required|email',
//            'password' => 'required'
//        ]);
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
           'lastname' => 'required',
           'email' => 'required|unique:users',
            'password' => 'required',
            'sex' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withErrors($validator)
                ->withInput();
        }
        if ($validator->passes())
        {
            $request->isEnabled = 1;
            $user = User::create($request->all(),[
                'firstname',
                'lastname',
                'email',
                'password',
                'phone',
                'user_type',
                'birthdate',
                'sex',
                'isEnabled'
            ]);
            auth()->login($user);
        }


        return redirect()->to('/');
    }
}

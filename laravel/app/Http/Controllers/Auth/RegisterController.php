<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
            'name' => ['required', 'max:100'],
            'name_hurigana' => ['max:100'],
            'email' => ['required','regex:/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', 'email:rfc,dns', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'max:32','regex:/^(?=.*?[a-z])(?=.*?\d)[a-z\d]+$/i'],
            'password_confirmation' => ['required', 'same:password'],
            'gender' => ['required'],
            'tel' => ['regex:/^[0-9]+$/', 'max:15', 'nullable'],
            'birthday' => ['required', 'date'],
            'post_code' => ['regex:/^[0-9]+$/', 'max:10', 'nullable'],
            'prefecture_id' => ['required'],
            'address' => ['required', 'max:100'],
            'building' => ['max:100'],
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
            'name' => $data['name'],
            'name_hurigana' => $data['name_hurigana'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'tel' => $data['tel'],
            'birthday' => $data['birthday'],
            'post_code' => $data['post_code'],
            'prefecture_id' => $data['prefecture_id'],
            'address' => $data['address'],
            'building' => $data['building'],
        ]);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use App\Helper;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/login';

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
            'FirstName' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'City' => ['required', 'string', 'max:255'],
            'Zip' => ['required', 'string', 'max:255'],
            'Street' => ['required', 'string', 'max:255'],
            'StreetNumber' => ['required', 'string', 'max:255'],
            'Mail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Password' => ['required', 'string', 'min:8', 'confirmed'],

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
            'FirstName' => $data['FirstName'],
            'LastName' => $data['LastName'],
            'City' => $data['City'],
            'Zip' => $data['Zip'],
            'Street' => $data['Street'],
            'StreetNumber' => $data['StreetNumber'],
            'Mail' => $data['Mail'],
            'Password' => Hash::make($data['Password']),
        ]);
    }

    public function store() {
        $rules = [
            'FirstName' => 'required|max:255',
            'LastName' => 'required|max:255',
            'City' => 'required|email|max:255|unique:client,email',
            'Zip' => 'required|max:20',
            'Street' => 'required|max:20',
            'StreetNumber' => 'required',
            'Mail' => 'required|max:255',
            'Password' => 'required|max:255',
        ];


        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(Input::all());
        } else {
            $client = new client;

            $client->FirstName                 = Input::get('FirstName');
            $client->LastName             = Input::get('LastName');
            $client->City              = Input::get('City');
            $client->Zip                  = Input::get('Zip');
            $client->Street                  = Input::get('Street');
            $client->StreetNumber                 = Input::get('StreetNumber');
            $client->Mail         = Input::get('Mail');
            $client->Password          = Hash::make(Input::get('Password'));

            $client->save();

            return redirect()
                ->route('layouts.home');
    }}
}

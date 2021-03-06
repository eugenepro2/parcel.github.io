<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

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

        $rules = [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];

        $messages = [
            'min' => 'Passwort: Mindestlänge 8 Zeichen, 1 Zahl, </br> 1 Großbuchstabe. ',
            'unique' => 'E-Mail-Adresse ist bereits registriert'
        ];

        return Validator::make($data, $rules, $messages);
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

    public function register(Request $request)
    {

      if(!preg_match("/((?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]))/", $request->password)){
        return redirect('/register')->with('message', 'Passwort: Mindestlänge 8 Zeichen, 1 Zahl, </br> 1 Großbuchstabe. ');
      }

      $this->validator($request->all())->validate();
      event(new Registered($user = $this->create($request->all())));
      return $this->registered($request, $user) ?: redirect('/login')->with('message', 'Prüfe bitte Deinen E-Mail-Ordner und </br> bestätige dort Deine Registrierung </br> (schaue ggf. im Spam-Ordner nach).');
    }

}

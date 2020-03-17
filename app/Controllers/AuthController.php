<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,
    Redirect,
    Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller {

    public function index() {
        if (Auth::check()) {
            return Redirect::to("startowa");
        }
        return view('login');
    }

    public function registration() {
        if (Auth::check()) {
            return Redirect::to("startowa");
        }
        return view('registration');
    }

    public function postLogin(Request $request) {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('zamowienia');
        }
        //return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
        return redirect()->back()->withErrors(['email' => 'Błędny e-mail lub hasło', 'password' => 'Błędne e-mail lub hasło']);
    }

    public function postRegistration(Request $request) {
        request()->validate([
            'name' => 'required|min:4|max:32',
            'email' => 'required|email|max:100|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        
        $check = $this->create($data);
        
        Auth::login($check);
        
        if (Auth::check()) {
            return Redirect::to("formularz");
        }
    }

    public function dashboard() {

        if (Auth::check()) {
            return view('formularz');
        }
        return Redirect::to("login");
    }
   
    public function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password'])
        ]);
        
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

}

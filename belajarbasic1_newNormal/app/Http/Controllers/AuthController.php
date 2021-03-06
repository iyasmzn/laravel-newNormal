<?php

namespace App\Http\Controllers;

use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest')->except(['logout']);
        $this->middleware('guest')->only(['login', 'register', 'registrationProcess', 'loginProcess']);
        $this->middleware('auth')->only(['logout']);
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function registrationProcess(Request $request)
    {
        $encryptPassword = bcrypt($request->password());
        $request->merge([
            'password' => $encryptPassword,
        ]);
        User::create($request->all());
        return redirect('/login');
    }
    public function loginProcess(Request $request)
    {
        $credentials    = $request->only('email', 'password');
        $isLoginSuccess = Auth::attempt($credentials);
        if ($isLoginSuccess) {
            return redirect()->intended('/');
        } else {
            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

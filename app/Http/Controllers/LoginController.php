<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//  use alert
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password],)) {
            // dd(Auth::user()->name ());
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('error', 'Maaf Username dan Password yang Anda Masukan Salah!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return view('login');
    }
}

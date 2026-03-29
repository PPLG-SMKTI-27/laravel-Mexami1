<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;


        if ($email === 'admin@sekolah.id' && $password === '123456') {

            return redirect('/login')->with('success', 'Login berhasil!');
        }

        
        return redirect('/login')->with('error', 'Email atau password salah');
    }
}

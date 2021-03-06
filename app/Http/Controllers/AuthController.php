<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

 public function postlogin(Request $request)
 {
 	if (Auth::attempt($request->only('email', 'password'))) {
 	return redirect()->intended('/')->with('alert', 'Login berhasil');
        }

        return back()->withErrors([
            'email' => 'Email / Password salah.',
        ]);
 	
 }

 public function logout(Request $request)
    {
        Auth::logout();
		$request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
       
    }

}

    

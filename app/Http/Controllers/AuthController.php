<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $Request)
    {

        $credentials = $Request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication successful
        return redirect()->intended('/dashboard');
    } else {
        // Authentication failed
        return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
    }
        // $Request->validate([
        //     'email' => 'required|string|email',
        //     'password' => 'required|string',
        // ]);
        // $credentials = $Request->only('email', 'password');
        
        // $token = Auth::attempt($credentials);

        // if (!$token) {
        //     return back();
        // }
        // return view('/dashboard');
    }

    public function logout() {
        Auth::logout(); 
        // $Request->session()->invalidate(); 
        return redirect('/'); 
    }
}

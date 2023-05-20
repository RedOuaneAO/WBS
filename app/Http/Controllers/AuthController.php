<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $Request)
    {
        // return $Request;
        $Request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $Request->only('email', 'password');

        $token = Auth::attempt($credentials);
        if (!$token) {
            return back();
        }
        return view('/dashboard');
    }
    public function logout() {
        Auth::logout();
        // $Request->session()->invalidate();
        return redirect('/');
    }
}

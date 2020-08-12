<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/task');
        }
        else {
            return redirect('/');
        }

    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}

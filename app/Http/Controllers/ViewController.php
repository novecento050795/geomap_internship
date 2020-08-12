<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function hello() {

        if (Auth::user())
            return redirect('task');
        else 
            return view('auth.login');
    }

    public function task() {
        
       if (Auth::user())
            return view('task');
        else 
            return redirect('/'); 
    }
}

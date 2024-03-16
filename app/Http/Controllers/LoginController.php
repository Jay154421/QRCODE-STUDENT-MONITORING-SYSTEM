<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        // login code
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/admin/dashboard');
        } else {
            session()->flash('error', 'Login failed !');
            return redirect('/');
        }
    }
}

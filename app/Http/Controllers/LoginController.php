<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);


        // login
        if (auth()->guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/admin/dashboard');
        } elseif (auth()->guard('parent')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/parent/dashboard');
        } elseif (auth()->guard('parent')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/student/dashboard');
        } else {
            return redirect('/')->with('error', 'Login failed !');
        }
    }
}

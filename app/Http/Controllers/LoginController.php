<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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

        $users = DB::table('parents')->get();
        // login
        if (auth()->guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/admin/dashboard');
        } elseif (auth()->attempt(['username' => $users, 'password' => $users])) {
            return redirect('/parent/dashboard');
        } else {
            return redirect('/')->with('error', 'Login failed !');
        }
    }
}

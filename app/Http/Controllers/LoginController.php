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

        $userCredential = $request->only('username', 'password');

        if (Auth::attempt($userCredential)) {
            return $this->redirectDash($request);
        } else {
            return redirect('/')->with('error', 'Login failed !');
        }
    }

    public function loadLogin(Request $request)
    {
        if (Auth::user()) {
            return $this->redirectDash($request);
        }
        return redirect()->route('login');
    }


    public function redirectDash(Request $request)
    {
        // Assuming the user is already authenticated
        $user = Auth::user(); // Get the authenticated user



        // Check the user's role and redirect accordingly
        if ($user->role === 'admin') {
            return redirect('/admin/dashboard');
        } elseif ($user->role === 'parent') {

            session(['parent_id' => $user->parent_id]);

            return redirect('/parent/dashboard');
            // dd(session(['parent_id' => $user->parent_id]));
        } elseif ($user->role === 'student') {

            session(['student_id' => $user->student_id]);

            return redirect('/student/dashboard');
        } else {
            // Default redirect if the role is not recognized
            return redirect('/')->with('error', 'Unauthorized access');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

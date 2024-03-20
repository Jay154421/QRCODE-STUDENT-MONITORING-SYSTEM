<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function logout(Request $request)
    {
        // Log out the user
        auth()->guard('admin')->logout();
        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the session token
        $request->session()->regenerateToken();

        // Redirect the user to the login page
        return redirect()->route('login');
    }
}

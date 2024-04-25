<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Parents;
use App\Models\Logs;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function showChildren()
    {
        $students = Logs::all();

        return view('test', compact('students'));
    }


    public function changePassword(Request $request)
    {
        // Validate the request data

        $user = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        dd($user);

        // // Retrieve the currently authenticated user
        // $user = Auth::user();

        // // Check if the current password matches the user's password
        // if (!Hash::check($request->current_password, $user->password)) {
        //     return back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        // }

        // // Update the user's password
        // $user->password = Hash::make($request->new_password);

        // dd($user->password);
        // Redirect the user back with a success message
        // return back()->with('success', 'Your password has been updated successfully.');
    }
}

<?php

namespace App\Http\Controllers\Student;

use App\Models\Student;
use App\Models\Logs;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentAccountController extends Controller
{

    public function showDashboard()
    {
        $studentId = session('student_id');
        $student = Student::findOrFail($studentId);
        $logs = Logs::where('id_student', $student->idnumber)->get();
        return view('student.dashboard', compact('logs'));
    }

    public function showProfile()
    {
        $studentId = session('student_id');
        $student = Student::findOrFail($studentId);
        return view('student.profile', compact('student'));
    }

    public function changePassword(Request $request)
    {

        $this->validate($request, [
            'current_password' => 'required',
            'new_password' => 'required|confirmed|min:8'
        ]);
        $auth = Auth::user();

        // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) {
            return back()->with('current_password', "Current Password is Invalid");
        }

        // Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }

        $user =  User::find($auth->id);
        $user->password =  Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }
}

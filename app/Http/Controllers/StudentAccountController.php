<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAccountController extends Controller
{

    public function showDashboard()
    {
        // Assuming the student's ID is stored in the session or passed as a route parameter
        // $studentId = session('student_id'); // or $request->route('id');
        // $student = User::find($studentId);

        return view('student.dashboard', compact('student'));
    }

    public function showProfile($id)
    {
        $student = Student::findOrFail($id);
        return view('student.profile', compact('student'));
    }
}

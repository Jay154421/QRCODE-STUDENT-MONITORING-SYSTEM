<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('created_at', 'desc')->get();
        return view('admin.students_info', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'idnumber' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'year' => 'required',
            'course' => 'required',
            'address' => 'required',
            'parent' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $student = Student::create([
            'idnumber' => $request->idnumber,
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'year' => $request->year,
            'course' => $request->course,
            'address' => $request->address,
            'parent' => $request->parent,
        ]);

        $user = User::create([
            'student_id' => $student->id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'student',
        ]);

        // dd($user);
        return redirect()->route('students.store');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $user = User::where('student_id', $id)->first();

        if ($user) {
            $user->delete();
        }

        $student->delete();

        return redirect()->route('students.index');
    }

    public function update(Request $request, $id)
    {
        $parent = Student::find($id);
        $parent->update($request->all());
        return redirect()->route('students.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Parents;
use App\Models\Logs;
use App\Models\Schedule;
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

        // Assuming 'parent' is the name of the parent
        $parent = Parents::where('name', $request->parent)->first();

        if (!$parent) {

            return back()->with('error', 'Parent not found');
        }

        $student = Student::create([
            'idnumber' => $request->idnumber,
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'year' => $request->year,
            'course' => $request->course,
            'address' => $request->address,
            'parent' => $request->parent,
            'parent_id' => $parent->id, // Use the ID of the found parent
        ]);

        User::create([
            'student_id' => $student->id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'student',
        ]);

        // dd($user);
        return redirect()->route('students.store')->with('success', 'Student Successfully created');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $logs = Logs::where('id_student', $student->idnumber)->first();
        $schedule = Schedule::where('student_id', $id)->first();
        $user = User::where('student_id', $id)->first();

        if ($user) {
            $user->delete();
        }
        if ($logs) {
            $logs->delete();
        }
        if ($schedule) {
            $schedule->delete();
        }
        $student->delete();
        return back()->with('success', 'Student Successfully deleted');
    }

    public function update(Request $request, $id)
    {
        $parent = Student::find($id);
        $parent->update($request->all());
        return back()->with('success', 'Student Successfully Updated');
    }
}

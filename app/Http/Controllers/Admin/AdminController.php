<?php

namespace App\Http\Controllers\Admin;

use App\Models\Parents;
use App\Models\Student;
use App\Models\Logs;
use App\Http\Controllers\Controller;
use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        $totalParents = Parents::count();
        $total = $totalStudents + $totalParents;

        return view('admin.dashboard', compact('totalStudents', 'totalParents', 'total'));
    }

    public function showAttendance()
    {
        $Records = Logs::orderBy('login_time', 'asc')->get();
        return view('admin.scanner', compact('Records'));
    }

    public function store(Request $request)
    {
        // Check if the student exists
        $studentExists = Student::where('idnumber', $request->id_student)->exists();

        if (!$studentExists) {
            return redirect('/scan')->with('error', 'Student is not recognized');
        }

        // Check if the student has already logged in today
        $log = Logs::where([
            'id_student' => $request->id_student,
            'date' => date('Y-m-d'),
        ])->first();

        if ($log) {
            // Student has already logged in today, update logout time
            $log->update([
                'logout_time' => now(),
            ]);
            return redirect('/scan')->with('success', 'Student has logged out successfully');
        } else {
            // Student has not logged in today, create a new log entry with login time
            Logs::create([
                'id_student' => $request->id_student,
                'date' => date('Y-m-d'),
                'login_time' => now(),
            ]);
            return redirect('/scan')->with('success', 'Student has logged in successfully');
        }
    }
}

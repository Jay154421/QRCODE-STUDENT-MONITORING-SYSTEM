<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Parents;
use App\Models\Logs;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParentAccountController extends Controller
{
    public function showDashboard()
    {
        return view('parent.dashboard');
    }

    public function showProfile($id)
    {
        $parent = Parents::findOrFail($id);

        return view('parent.profile', compact('parent'));
    }

    public function showSchedule($parentId)
    {
        $schedules = Schedule::where('student_id', $parentId)->get();
        return view('parent.schedule', compact('schedules'));
    }
}

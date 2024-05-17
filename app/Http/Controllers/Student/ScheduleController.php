<?php

namespace App\Http\Controllers\Student;

use App\Models\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //
    public function index()
    {
        $studentId = session('student_id');
        $schedules = Schedule::where('student_id', $studentId)->get();
        return view('student.schedule', compact('schedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subjcode' => 'required',
            'section' => 'required',
            'description' => 'required',
            'schedule' => 'required',
            'unit' => 'required',
        ]);

        $studentId = session('student_id');

        Schedule::create([
            'student_id' => $studentId,
            'subjcode' => $request->subjcode,
            'section' => $request->section,
            'description' => $request->description,
            'schedule' => $request->schedule,
            'unit' => $request->unit
        ]);

        return redirect()->route('schedule.store')->with("success", 'Schedule successfully created');
    }

    public function update(Request $request, $id)
    {
        $schedules = Schedule::find($id);
        $schedules->update($request->all());
        return back()->with('success', 'Schedule Successfully Updated');
    }

    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $schedule->delete();

        return redirect()->route('schedule')->with('success', 'Schedule successfully deleted');
    }
}

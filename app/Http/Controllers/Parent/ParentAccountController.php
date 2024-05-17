<?php

namespace App\Http\Controllers\Parent;

use App\Models\Schedule;
use App\Models\Parents;
use App\Models\User;
use App\Models\Logs;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use function Pest\Laravel\get;

class ParentAccountController extends Controller
{
    public function showDashboard()
    {
        //Current ParentId
        $parentId = session('parent_id');
        $parent = Parents::findOrFail($parentId);

        //Retrieve the student idnumber
        $studentId = $parent->students->first()->idnumber;

        $logs = Logs::where('id_student', $studentId)->get();
        return view('parent.dashboard', compact('logs'));
    }

    public function showProfile()
    {
        $parentId = session('parent_id');
        // $parentId = Auth::user()->parent_id;
        $parent = Parents::findOrFail($parentId);

        return view('parent.profile', compact('parent'));
    }

    public function showSchedule()
    {
        $parentId = session('parent_id');
        $parent = Parents::findOrFail($parentId);
        $studentId = $parent->students->first()->parent_id;
        $schedules = Schedule::where('student_id', $studentId)->get();

        return view('parent.schedule', compact('schedules'));
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

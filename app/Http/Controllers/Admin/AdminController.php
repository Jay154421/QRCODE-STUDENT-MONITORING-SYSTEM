<?php

namespace App\Http\Controllers\Admin;


use Twilio\Rest\Client;
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
        $Records = Logs::orderBy('login_time', 'desc')->get();
        return view('admin.scanner', compact('Records'));
    }

    public function sendSms($message)
    {
        // Example using Vonage
        $basic = new \Vonage\client\Credentials\Basic('b9a82d6e', 'pEZ0HK93Wm1Iprg1');
        $client = new \Vonage\Client($basic);
        // Set the CA bundle path for Guzzle with a relative path
        $guzzleClient = new \GuzzleHttp\Client([
            'verify' => storage_path('cacert.pem'),
        ]);
        $client->setHttpClient($guzzleClient);
        $message = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("639566815765", "SMS Test", $message)
        );
        // Return a response
        return response()->json(['message' => 'SMS sent successfully']);
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
            $this->sendSms('Your student has logged out');
            return redirect('/scan')->with('success', 'Student has logged out successfully');
        } else {
            // Student has not logged in today, create a new log entry with login time
            Logs::create([
                'id_student' => $request->id_student,
                'date' => date('Y-m-d'),
                'login_time' => now(),
            ]);

            $this->sendSms('Your student has logged in');
            return redirect('/scan')->with('success', 'Student has logged in successfully');
        }
    }
}

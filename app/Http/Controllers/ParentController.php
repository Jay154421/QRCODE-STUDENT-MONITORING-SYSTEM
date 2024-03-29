<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\Parents;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        return view('admin.parents_info');
    }
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        Parents::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'address' => $request->address,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/admin/parentInfo');
    }
}

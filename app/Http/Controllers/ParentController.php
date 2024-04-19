<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Parents;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        $parents = Parents::orderBy('created_at', 'desc')->get();
        return view('admin.parents_info', compact('parents'));
    }


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

        $parent = Parents::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        User::create([
            'parent_id' => $parent->id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'parent',
        ]);

        return redirect()->route('parents.store');
    }

    public function update(Request $request, $id)
    {
        $parent = Parents::find($id);
        $parent->update($request->all());
        return redirect()->route('parents.index');
    }

    public function destroy($id)
    {
        $parent = Parents::find($id);
        $user = User::where('parent_id', $id);

        if ($user) {
            $user->delete();
        }

        $parent->delete();

        return redirect()->route('parents.index');
    }
}

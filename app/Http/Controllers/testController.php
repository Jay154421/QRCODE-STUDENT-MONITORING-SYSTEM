<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Parents;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function showChildren($parentId)
    {
        $parent = Parents::with('children')->findOrFail($parentId);

        return view('test', compact('parent'));
    }
}

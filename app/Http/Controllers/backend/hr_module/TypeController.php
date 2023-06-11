<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use App\Models\Backend\hr_module\Type;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TypeController extends Controller
{
    public function createType()
    {
        return view('backend.hr_module.add_type');
    }
    public function storeType(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:50', 'unique:types']
        ]);
        Type::insert([
            'title' => $request->title,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Type added successfully!');
    }
}

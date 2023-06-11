<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use App\Models\Backend\hr_module\EmployeeType;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EmployeetypeController extends Controller
{
    public function allEmployeetype()
    {
        return view('backend.hr_module.employee_type.employee_type');
    }
    public function addEmployeetype()
    {
        return view('backend.hr_module.employee_type.add_employee_type');
    }
    public function storeEmployeetype(Request $request)
    {
        $request->validate([
            'type' => ['required'],
            'name' => ['required', 'max:100'],
            'deduct_salary' => ['required'],
            'over_time' => ['required'],
            'status' => ['required'],
        ]);
        EmployeeType::insert([
            'type' => $request->type,
            'name' => $request->name,
            'deduct_salary' => $request->deduct_salary,
            'over_time' => $request->over_time,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);

        return back()->with('success', 'Employee type added successfully!');
    }
    public function showEmployeetype()
    {
        return view('backend.hr_module.employee_type.employee_type_view');
    }
    public function editEmployeetype()
    {
        return view('backend.hr_module.employee_type.employee_type_edit');
    }
}

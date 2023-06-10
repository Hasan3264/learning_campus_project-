<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function showEmployeetype()
    {
        return view('backend.hr_module.employee_type.employee_type_view');
    }
    public function editEmployeetype()
    {
        return view('backend.hr_module.employee_type.employee_type_edit');
    }
}

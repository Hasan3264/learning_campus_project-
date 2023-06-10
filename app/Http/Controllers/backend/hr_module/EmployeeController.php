<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
        public function allEmployees()
    {
        return view('backend.hr_module.employee.all_employees');
    }
    public function addEmployee()
    {
        return view('backend.hr_module.employee.add_employee');
    }
    public function showEmployee()
    {
        return view('backend.hr_module.employee.employee_view');
    }
    public function editEmployee()
    {
        return view('backend.hr_module.employee.employee_edit');
    }
}

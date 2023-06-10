<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkingShiftController extends Controller
{
    public function allWorkingShifts()
    {
        return view('backend.hr_module.working_shift.working_shift');
    }
    public function addWorkingShift()
    {
        return view('backend.hr_module.working_shift.add_working_shift');
    }
    public function showWorkingShift()
    {
        return view('backend.hr_module.working_shift.working_shift_view');
    }
    public function editWorkingShift()
    {
        return view('backend.hr_module.working_shift.working_shift_edit');
    }
}

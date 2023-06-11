<?php

namespace App\Http\Controllers\backend\hr_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
        public function allDesignation()
    {
        return view('backend.hr_module.designation.all_designations');
    }
    public function addDesignation()
    {
        return view('backend.hr_module.designation.add_designation');
    }
    public function showDesignation()
    {
        return view('backend.hr_module.designation.designation_view');
    }
    public function editDesignation()
    {
        return view('backend.hr_module.designation.designation_edit');
    }
}

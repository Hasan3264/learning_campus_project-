<?php

namespace App\Http\Controllers\Hrmodule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HrmoduleController extends Controller
{
    // EMPLOYE 
    public function AllEmployetype(){
        return view('Hrmodule.EmployeType.allemploye');
    }//end method
 
    public function AddEmployetype(){
        return view('Hrmodule.EmployeType.addemploye');
    }//end method

    // DESIGNATION
   
    public function AllDesignation(){
        return view('Hrmodule.Designation.alldesignation');
    }//end method
 
    public function AddDesignation(){
        return view('Hrmodule.Designation.adddesignation');
    }//end method
    
    
    // WORKING SHIFT

    public function Allworkingshift(){
        return view('Hrmodule.Workingshift.allworkingshift');
    }//end method
 
    public function Addworkingshift(){
        return view('Hrmodule.Workingshift.addworkingshift');
    }//end method
   
   
   // ADD EMPLOYE 

    public function AddEmployeSidebar(){
        return view('Hrmodule.Addemploye.addemploye');
    }//end method
   
    public function ManageEmploye(){
        return view('Hrmodule.Addemploye.manageemploye');
    }//end method

    public function EmployeSearch(){
        return view('Hrmodule.Addemploye.employesearch');
    }//end method

    public function EmployeIDcardSearch(){
        return view('Hrmodule.Addemploye.employeidcard');
    }//end method

    public function EmployeAttendance(){
        return view('Hrmodule.Addemploye.employeattendance');
    }//end method


}

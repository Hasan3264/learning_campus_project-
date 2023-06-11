<?php

namespace App\Http\Controllers\backend\leave_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //////////////////////// Start Leave Type////////////////
    public function LeaveType(){

        return view('backend.leave_module.leave_type.leave_type');
    } //end method

    public function AddLeaveType(){

       return view('backend.leave_module.leave_type.add_leave_type');
    }//end method

    public function StoreLeaveType(){


    }//end method

    public function EditLeaveType(){

       return view('backend.leave_module.leave_type.leave_type_edit');
    }//end method

    public function UpdateLeaveType(){


    }//end method

    public function ViewLeaveType(){

       return view('backend.leave_module.leave_type.leave_type_view');
    }//end method

    public function DeleteLeaveType(){


    }//end method

    //////////////////////// End Leave Type////////////////

    //////////////////////// Start Leave Entry////////////////

     public function LeaveEntry(){

         return view('backend.leave_module.leave_entry');
   }//end method

    //////////////////////// End Leave Entry////////////////

    //////////////////////// Start Manage Leave ////////////////


    public function Leave(){

       return view('backend.leave_module.manage_leave.leave');
    }//end method

    public function AddLeave(){

       return view('backend.leave_module.manage_leave.add_leave');
    }//end method

    public function StoreLeave(){


    }//end method

    public function ViewLeave(){

         return view('backend.leave_module.manage_leave.leave_view');
    }//end method
    public function EditLeave(){

       return view('backend.leave_module.manage_leave.leave_edit');
    }//end method

    public function UpdateLeave(){

    }//end method

    public function DeleteLeave(){

    }//end method


    //////////////////////// End  Manage Leave ////////////////
}

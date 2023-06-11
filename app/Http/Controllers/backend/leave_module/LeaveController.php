<?php

namespace App\Http\Controllers\backend\leave_module;

use App\Http\Controllers\Controller;
use App\Models\leaveType;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //////////////////////// Start Leave Type////////////////
    public function LeaveType(){
       $leaveTypes = leaveType::all();
        return view('backend.leave_module.leave_type.leave_type',[
            'leaveTypes' => $leaveTypes,
        ]);
    } //end method

    public function AddLeaveType(){

       return view('backend.leave_module.leave_type.add_leave_type');
    }//end method
            protected $rules = [
                'employee_type' => ['required'],
                'title' => ['required'],
                'short_title' => ['required'],
                'leave_days' => ['required'],
                'status' => ['required'],
            ];
         public function StoreLeaveType(Request $request){
         $this->validate($request, $this->rules);
             leaveType::insert([
                 'employee_type' => $request->employeeType,
                 'title' => $request->title,
                 'short_title' => $request->short_title,
                 'leave_days' => $request->leave_days,
                 'status' => $request->status,
            ]);
            return redirect(route('leave_type'))->with('success', 'Added Successfully!');
    }//end method

    public function EditLeaveType($id){
        $findId = leaveType::findOrFail($id);
        return view('backend.leave_module.leave_type.leave_type_edit',[
            'findId' => $findId,
        ]);
    }//end method

    public function UpdateLeaveType(Request $request){
     $this->validate($request, $this->rules);
      leaveType::findOrFail($request->leave_id)->update([
                 'employee_type' => $request->employeeType,
                 'title' => $request->title,
                 'short_title' => $request->short_title,
                 'leave_days' => $request->leave_days,
                 'status' => $request->status,
      ]);
      return redirect(route('leave_type'))->with('success', 'Added Successfully!');
    }//end method

    public function ViewLeaveType($id){
        $findId = leaveType::findOrFail($id);
       return view('backend.leave_module.leave_type.leave_type_view',[
        'findId' => $findId,
       ]);
    }//end method

    public function DeleteLeaveType(Request $request){
        leaveType::findOrFail($request->del_id)->delete();
        return response()->json(['success' => 'Deleted Successfully!', 'tr'=> 'tr_'.$request->del_id]);

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

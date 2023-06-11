<?php

namespace App\Http\Controllers;

use App\Models\branchdetails;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\user_type;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
class UserManagmentController extends Controller
{
    public function studentList(){
        $studentlists = user_type::paginate(10);
        return view('backend.usermanagement.userList',[
            'studentlists' => $studentlists,

        ]);
    }
    public function Studentsms(){
        return view('backend.usermanagement.userSmsStudent');
    }
    public function EmployeSms(){
        return view('backend.usermanagement.userSmsEmploye');
    }
    public function add(){
        $branchs = branchdetails::all();
      return view('backend.usermanagement.addUser',[
        'branchs' => $branchs,
      ]);
    }

    protected $rules = [
        'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
        'password' => ['required', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])/', 'not_in:password,123456,qwerty'],
    ];
    public function input(Request $request){
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return response()->json(['errors' => "error Found."]);
        }
        $userId= User::insertGetId([
            'name'=> $request->username,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
        ]);
        user_type::insert([
            'user_id' => $userId,
            'user_type' =>$request->subject,
            'branch_id' =>$request->branch,
        ]);

       return response()->json(['success' => "Added Successfully."]);
    }
    public function show($id){
         $findId = user_type::findOrFail($id);
         return view('backend.usermanagement.show',[
             'findId' => $findId,
         ]);
    }
    public function edit($id){
         $findId = user_type::findOrFail($id);
         return view('backend.usermanagement.edit',[
             'findId' => $findId,
         ]);
    }
}

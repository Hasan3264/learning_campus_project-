<?php

use App\Http\Controllers\backend\leave_module\LeaveController;
use Illuminate\Support\Facades\Route;




Route::middleware('auth')->controller(LeaveController::class)->prefix('/leave')->group(function(){


    //////////////////////// Start Leave Type////////////////




 Route::get('/type','LeaveType')->name('leave_type');

 Route::get('/type/add','AddLeaveType')->name('add_leave_type');

 Route::post('/type/store','StoreLeaveType')->name('store_leave_type');

 Route::get('/type/edit','EditLeaveType')->name('edit_leave_type');

 Route::get('/type/update','UpdateLeaveType')->name('update_leave_type');

 Route::get('/type/view','ViewLeaveType')->name('view_leave_type');

 Route::get('/type/delete','DeleteLeaveType')->name('delete_leave_type');



    //////////////////////// End Leave Type////////////////

    //////////////////////// Start Leave Entry////////////////

 Route::get('/entry','LeaveEntry')->name('leave_entry');

    //////////////////////// End Leave Entry////////////////

    //////////////////////// Start Manage Leave ////////////////

 Route::get('/leave','Leave')->name('leave');

 Route::get('/add','AddLeave')->name('add_leave');

 Route::get('/store','StoreLeave')->name('store_leave');

 Route::get('/edit','EditLeave')->name('edit_leave');

 Route::get('/update','UpdateLeave')->name('update_leave');

 Route::get('/view','ViewLeave')->name('view_leave');

 Route::get('/delete','DeleteLeave')->name('delete_leave');

    //////////////////////// End  Manage Leave ////////////////


});



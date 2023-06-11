<?php

use App\Http\Controllers\UserManagmentController;
use Illuminate\Support\Facades\Route;


///student attendance
Route::controller(UserManagmentController::class)->prefix('/User')->group(function () {

    Route::get('/StudentList', 'studentList')->name('studentlist');

    Route::get('/StudentSms','Studentsms')->name('studentsms');

    Route::get('/EmployeSms', 'EmployeSms')->name('employesms');
    Route::get('/Add', 'add')->name('user.add');
    Route::post('/Add/ok', 'input')->name('user.input');
    Route::get('/Show/{id}', 'show')->name('user.show');
    Route::get('/Edit/{id}', 'edit')->name('user.edit');
});

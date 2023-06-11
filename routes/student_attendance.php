<?php

use App\Http\Controllers\backend\student_attendance\StudentAttendanceController;
use Illuminate\Support\Facades\Route;


///student attendance
Route::controller(StudentAttendanceController::class)->prefix('/student')->group(function(){

    Route::get('/today/attendance','TodayAttendance')->name('today_attendance');

    Route::get('/manual/attendance','ManualAttendance')->name('manual_attendance');

    Route::get('/absent/student','AbsentStudent')->name('absent_student');

    Route::get('/attendance/details','AttendanceDetails')->name('attendance_details');

    Route::get('/daily/attendance/summary','DailyAttendance')->name('daily_attendance_summary');

    Route::get('/monthly/attendance/summary','MonthlyAttendance')->name('monthly_attendance_summary');

});

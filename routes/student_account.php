<?php

use App\Http\Controllers\backend\student_account\StudentAccountController;
use Illuminate\Support\Facades\Route;


Route::controller(StudentAccountController::class)->prefix('/student')->group(function(){

    Route::get('/admission/fee','AdmissionFee')->name('student_admission_fee');

    Route::get('/fee/collection','FeeCollection')->name('fee_collection');

    Route::get('/fee/re/collection','FeeReCollection')->name('fee_re_collection');

    Route::get('/monthly/fee','MonthlyFee')->name('monthly_fee');

    Route::get('/quick/collection','QuickCollection')->name('quick_collection');

    Route::get('/student/fee','StudentFee')->name('student_fee');

    Route::get('/student/waiver','StudentWaiver')->name('student_waiver');

    Route::get('/print/collection/invoice','PrintCollectionInvoice')->name('print_collection_invoice');


});

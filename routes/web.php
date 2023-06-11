<?php
use App\Http\Controllers\backend\routine\RoutineController;
use App\Http\Controllers\{ProfileController, InstituteController, branchController, AcademicHolidayController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Academic\AllsessionAcademicController;
use App\Http\Controllers\backend\student_module\StudentController;
use App\Http\Controllers\backend\finance_reports_module\FinanceReportsController;
use App\Http\Controllers\backend\payroll_module\{PayrollHeadController, EmployeePayscaleController, EmployeesSalaryChartController, EmployeesSalaryController};
use App\Http\Controllers\Hrmodule\HrmoduleController;
use App\Http\Controllers\ExamSetting\ExamsettingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/institute', [InstituteController::class, 'index'])->name('institute.index');
    Route::post('/institute/input', [InstituteController::class, 'input'])->name('institute.input');
    Route::post('/Ganarel/input', [InstituteController::class, 'ganarel_input'])->name('ganarel.input');





        Route::get('/academic-holiday', [AcademicHolidayController::class, 'index'])->name('academic-holiday.index');
        Route::get('/academic-holiday/create', [AcademicHolidayController::class, 'createForm'])->name('academic-holiday.create');
        Route::post('academic-holiday/store', [AcademicHolidayController::class, 'store'])->name('academic-holiday.store');
        Route::get('/academic-holiday/{id}/view', [AcademicHolidayController::class, 'view'])->name('academic-holiday.view');
        Route::get('/academic-holiday/{id}/edit', [AcademicHolidayController::class, 'editForm'])->name('academic-holiday.edit');
        Route::post('/academic-holiday/{id}/update', [AcademicHolidayController::class, 'update'])->name('academic-holiday.update');
        Route::get('/academic-holiday/{id}/delete', [AcademicHolidayController::class, 'delete'])->name('academic-holiday.delete');
    //    Routine
        Route::get('/r.index',[RoutineController::class,'index'])->name('r.index');
        Route::get('/r.dynamic',[RoutineController::class,'dynamic'])->name('r.dynamic');
        Route::get('/r.print',[RoutineController::class,'printindex'])->name('r.print');
        // Students module routes

        Route::get('/students/add-students', [StudentController::class, "addForm"])->name("students.add");
        Route::get('/students/print-admission-form', [StudentController::class, "printForm"])->name('students.print-admission-form');
        Route::get('/students/current-students', [StudentController::class, "currentStudentList"])->name('students.current-students');


           //Routine


        Route::get('/students/archive-students', [StudentController::class, "archiveStudentList"])->name('students.archive-students');
        Route::get('/students/current-students-search', [StudentController::class, "currentStudentSearch"])->name('students.current-students-search');
        Route::get('/students/archive-students-search', [StudentController::class, "archiveStudentSearch"])->name('students.archive-students-search');
        Route::get('/students/student-switch', [StudentController::class, 'studentSwitch'])->name('students.switch');
        Route::get('/students/student-migration', [StudentController::class, 'studentMigration'])->name('students.migration');
        Route::get('/students/print-student-id', [StudentController::class, 'printStudentId'])->name('students.print-student-id');
        Route::get('/students/student-biometric-export', [StudentController::class, 'biometricExport'])->name('students.biometric-export');
        Route::get('/students/print-student-testimonial', [StudentController::class, 'printStudentTesimonial'])->name('students.print-student-testimonial');

         // Payroll Module routes


        Route::get('/payroll/head', [PayrollHeadController::class, 'index'])->name('payroll-head.index');
        Route::get('/payroll/head/view', [PayrollHeadController::class, 'show'])->name('payroll-head.view');
        Route::get('/payroll/head/add', [PayrollHeadController::class, 'add'])->name('payroll-head.add');
        Route::get('/payroll/head/edit', [PayrollHeadController::class, 'edit'])->name('payroll-head.edit');

        Route::get('/employee/payscale', [EmployeePayscaleController::class, 'index'])->name('employee-payscale.index');
        Route::get('/employee/payscale/view', [EmployeePayscaleController::class, 'show'])->name('employee-payscale.view');
        Route::get('/employee/payscale/add', [EmployeePayscaleController::class, 'add'])->name('employee-payscale.add');
        Route::get('/employee/payscale/edit', [EmployeePayscaleController::class, 'edit'])->name('employee-payscale.edit');

        Route::get('/employee/salary/chart', [EmployeesSalaryChartController::class, 'index'])->name('employee-salary.index');
        Route::get('/employee/salary/view', [EmployeesSalaryChartController::class, 'show'])->name('employee-salary.view');
        Route::get('/employee/salary/add', [EmployeesSalaryChartController::class, 'add'])->name('employee-salary.add');
        Route::get('/employee/salary/edit', [EmployeesSalaryChartController::class, 'edit'])->name('employee-salary.edit');

        Route::get('/employee/salary-sheet/generate', [EmployeesSalaryController::class, 'generateSheet'])->name('employee.salary-sheet.generate');
        Route::get('/employee/salary-report', [EmployeesSalaryController::class, 'report'])->name('employee.salary.report');
        Route::get('/employee/salary-payment', [EmployeesSalaryController::class, 'payment'])->name('employee.salary.payment');
        Route::get('/employee/payslip/print', [EmployeesSalaryController::class, 'payslipPrint'])->name('employee.payslip.print');

        // Financial Reports Routes

        Route::get('/finance-reports/daily-collection', [FinanceReportsController::class, 'dailyCollection'])->name('finance-reports.daily-collection');
        Route::get('/finance-reports/fees-collection', [FinanceReportsController::class, 'feesCollection'])->name('finance-reports.fees-collection');
        Route::get('/finance-reports/students-dues', [FinanceReportsController::class, 'studentsDues'])->name('finance-reports.students-dues');
        Route::get('/finance-reports/students-ledger', [FinanceReportsController::class, 'studentsLedger'])->name('finance-reports.students-ledger');
        Route::get('/finance-reports/students-waiver-report', [FinanceReportsController::class, 'studentsWaiverReport'])->name('finance-reports.students-waiver-report');
        Route::get('/finance-reports/accounts-ledger', [FinanceReportsController::class, 'accountsLedger'])->name('finance-reports.accounts-ledger');
        Route::get('/finance-reports/trial-balance', [FinanceReportsController::class, 'trialBalance'])->name('finance-reports.trial-balance');
        Route::get('/finance-reports/cash-book', [FinanceReportsController::class, 'cashBook'])->name('finance-reports.cash-book');
        Route::get('/finance-reports/bank-book', [FinanceReportsController::class, 'bankBook'])->name('finance-reports.bank-book');
        Route::get('/finance-reports/balance-sheet', [FinanceReportsController::class, 'balanceSheet'])->name('finance-reports.balance-sheet');
        Route::get('/finance-reports/payable-receivable', [FinanceReportsController::class, 'payableReceivable'])->name('finance-reports.payable-receivable');

   });

    // Academic Holidays routes

Route::middleware('auth')->controller(branchController::class)->group(function () {
    Route::get('/index', 'index')->name('branch.index');
    Route::get('/branch/add', 'add')->name('branch.add');
    Route::post('/branch/input', 'input_branch')->name('branch.input');
    Route::get('/branch/show/{id}', 'show_branece')->name('branch.show');
    Route::get('/branch/edit/{id}', 'edit_branece')->name('branch.edit');
    Route::post('/branch/edit', 'edit_push')->name('branch.editpush');
    Route::post('/branchdelete', 'branch_delete');
});

// All SESSION ACADDEMIC

Route::middleware('auth')->controller(AllsessionAcademicController::class)->prefix('/academic')->group(function () {
    Route::get('/allsection', 'AllSection')->name('allsection');
    Route::get('/createsession', 'CreateSession')->name('createsession');
    Route::POST('/insertsession', 'Insertsession')->name('insertsession');
    Route::get('/allsessionedit/{id}', 'AllSessionEdit')->name('allsessionedit');
    Route::POST('/updatesession/{id}', 'UpdateSessionId')->name('updatesession');
    Route::get('/allsessiondelete/{id}', 'DeleteSessionId')->name('allsessiondelete');
});

// All MEDIUM ACADDEMIC

Route::middleware('auth')->controller(AllsessionAcademicController::class)->prefix('/academic')->group(function () {
    Route::get('/allmedium', 'AllMedium')->name('allmedium');
    Route::get('/createmedium', 'CreatemMedium')->name('createmedium');
    Route::POST('/insertmedium', 'InsertMedium')->name('insertmedium');
    Route::get('/allmediumedit/{id}', 'AllmediumEdit')->name('allmediumedit');
    Route::POST('/updatemedium/{id}', 'UpdatemediumId')->name('updatemedium');
    Route::get('/allmediumdelete/{id}', 'DeletemediumId')->name('allmediumdelete');
});

// ACADEMIC CALENDER

Route::middleware('auth')->controller(AllsessionAcademicController::class)->prefix('/academic')->group(function(){
    Route::get('/calender','AcademicCalender')->name('academiccalander');
});

// All MEDIUM ACADDEMIC

Route::middleware('auth')->controller(HrmoduleController::class)->prefix('/hrmodule')->group(function () {
    Route::get('/employetype', 'AllEmployetype')->name('employetype');
    Route::get('/addemployetype', 'AddEmployetype')->name('addemployetype');


    // DESIGNATION IN HR module
    Route::get('/alldesignation', 'AllDesignation')->name('alldesignation');
    Route::get('/adddesignation', 'AddDesignation')->name('adddesignation');


    // WORKINGSHIFT IN HR module
    Route::get('/allworkingshift', 'Allworkingshift')->name('allworkingshift');
    Route::get('/addworkingshift', 'Addworkingshift')->name('addworkingshift');


    // AddEmployeSidebar IN HR module
    Route::get('/newemployeadd', 'AddEmployeSidebar')->name('newemployeadd');
    Route::get('/manageemploye', 'ManageEmploye')->name('manageemploye');
    Route::get('/employesearch', 'EmployeSearch')->name('employesearch');
    Route::get('/employeidcard', 'EmployeIDcardSearch')->name('employeidcard');
    Route::get('/employeattendance', 'EmployeAttendance')->name('employeattendance');
});

Route::middleware('auth')->controller(ExamsettingController::class)->prefix('/exam')->group(function () {

    Route::get('/managegrade', 'ManageGrade')->name('managegrade');
    Route::get('/addgrade', 'AddGrade')->name('addgrade');

    // EXAM TERMS
    Route::get('/manageexamterms', 'Manageexamterms')->name('manageexamterms');
    Route::get('/addexamterms', 'Addexamterms')->name('addexamterms');

    // EXAM PARTS
    Route::get('/manageexamparts', 'Manageexamparts')->name('manageexamparts');
    Route::get('/addexamparts', 'Addexamparts')->name('addexamparts');

    // EXAM ASSIGN
    Route::get('/manageexamassign', 'Manageexamassign')->name('manageexamassign');
    Route::get('/addexamassign', 'Addexamassign')->name('addexamassign');

    // EXAM WORKINGDAYS
    Route::get('/manageexamworkingdays', 'Manageexamworkingdays')->name('manageexamworkingdays');
    Route::get('/addexamworkingdays', 'Addexamworkingdays')->name('addexamworkingdays');

    // EXAM WORKINGDAYS
    Route::get('/resultsetting', 'ResultSetting')->name('resultsetting');

    // EXAM ExamEligibility
    Route::get('/exameligibility', 'ExamEligibility')->name('exameligibility');

    // EXAM SeatPlan
    Route::get('/examseatplan', 'ExamSeatplan')->name('examseatplan');

    // EXAM Attendance
    Route::get('examattendance', 'ExamAttendance')->name('examattendance');

    // EXAM AttendanceSUbject
    Route::get('examattensubject', 'ExamattenSubject')->name('examattensubject');

    // EXAM AttendanceSUbject
    Route::get('examattenexam', 'ExamattenExam')->name('examattenexam');

});






require __DIR__ . '/auth.php';
require __DIR__ . '/academic_module.php';
require __DIR__ . '/employeattendence.php';
require __DIR__ . '/result.php';
require __DIR__ . '/boucher.php';
require __DIR__ . '/student_attendance.php';
require __DIR__ . '/leave_module.php';
require __DIR__ . '/UserManagement.php';
require __DIR__ . '/Promotion.php';
require __DIR__ . '/finance_module.php';
require __DIR__ . '/student_account.php';
require __DIR__ . '/learning_module.php';
require __DIR__ . '/finance_module.php';
require __DIR__ . '/student_account.php';
require __DIR__ . '/website_module.php';

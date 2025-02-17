<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\BranchesController;
use App\Http\Controllers\Api\CarProcessController;
use App\Http\Controllers\Api\CarTypeController;
use App\Http\Controllers\Api\ChecksController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\InvoiceNotesController;
use App\Http\Controllers\Api\InvoiceProblemsController;
use App\Http\Controllers\Api\InvoiceTypeController;
use App\Http\Controllers\Api\PaidMethodController;
use App\Http\Controllers\Api\PurchasesController;
use App\Http\Controllers\Api\RentController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\ServiceWorkerController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\StaffController;
use App\Http\Controllers\Api\StaffReportsController;
use App\Http\Controllers\Api\StagesController;
use App\Http\Controllers\Api\StatisticsController;
use App\Http\Controllers\Api\TasksController;
use App\Http\Controllers\Api\UserRolesController;
use App\Http\Controllers\ApiAuth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');




Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout')->middleware('auth:sanctum');
    Route::get('show/users', 'show_users');
    Route::post('update/user/{id}', 'update_user');
    Route::delete('delete/user/{id}', 'delete_user');
    Route::post('import/users', 'import_users');
    Route::get('user/profile/{id}', 'user_profile');
    Route::get('update/user/password/{id}', 'update_user_password');
});

Route::controller(UserRolesController::class)->group(function () {
    Route::post('add/role', 'add_role');
});

// branches controller
Route::controller(BranchesController::class)->group(function () {
    Route::post('add/new/branch', 'add_new_branch');
    Route::get('show/branches', 'show_branches');
    Route::post('update/branch/{id}', 'update_branch');
    Route::delete('delete/branch/{id}', 'delete_branch');
});


// invoice controller
Route::controller(InvoiceController::class)->group(function () {
    Route::post('add/new/invoice', 'add_new_invoice');
    Route::get('show/invoices', 'show_invoices');
    Route::get('show/invoice/{id}', 'show_invoice');
    Route::get('show/invoices/details', 'show_invoices_details');
    Route::post('update/invoice/{id}', 'update_invoice');
    Route::delete('delete/invoice/{id}', 'delete_invoice');
    Route::post('import-invoices', 'import');
    Route::post('change/invoice/status/{id}', 'update_invoice_status');
});

Route::controller(InvoiceProblemsController::class)->group(function () {
    Route::post('add/problem/{id}', 'add_problem');
    Route::post('update/problem/{id}', 'update_problem');
    Route::delete('delete/problem/{id}', 'delete_problem');
    Route::get('show/problems', 'show_problems');
});

// stages Controller
Route::controller(StagesController::class)->group(function () {
    Route::post('add/stage/{id}', 'add_stage');
    Route::get('show/stages', 'show_stages');
    Route::get('show/job/cards', 'show_job_cards');
    Route::post('change/status/{id}', 'update_stage_status');
    Route::get('delete/stage/{id}', 'delete_stage');
});



// invoice types
Route::controller(InvoiceTypeController::class)->group(function () {
    Route::post('add/invoice/type', 'add_invoice_type');
    Route::get('show/invoices/type', 'show_invoices_type');
    Route::post('update/invoice/type/{id}', 'update_invoice_type');
    Route::delete('delete/invoice/type/{id}', 'delete_invoice_type');
});

// paid method 
Route::controller(PaidMethodController::class)->group(function () {
    Route::post('add/method/type', 'add_method_type');
    Route::get('show/method/type', 'show_method_type');
    Route::post('update/method/type/{id}', 'update_method_type');
    Route::delete('delete/method/type/{id}', 'delete_method_type');
});

// invoice notes
Route::controller(InvoiceNotesController::class)->group(function () {
    Route::post('add/note', 'add_note');
    Route::get('show/notes', 'show_notes');
    Route::post('update/note/{id}', 'update_note');
    Route::delete('delete/note/{id}', 'delete_note');
});

// departments
Route::controller(DepartmentController::class)->group(function () {
    Route::post('add/department', 'add_department');
    Route::get('show/departments', 'show_departments');
    Route::post('update/department/{id}', 'update_department');
    Route::delete('delete/department/{id}', 'delete_department');
});


// staff
Route::controller(StaffController::class)->group(function () {
    Route::post('add/new/staff', 'add_new_staff');
    Route::get('show/staff', 'show_staff');
    Route::post('update/staff/{id}', 'update_staff');
    Route::delete('delete/staff/{id}', 'delete_staff');
    Route::post('import/staff', 'import_staff');
    Route::get('reset/staff/salaries', 'reset_staff_salaries');
    Route::get('show/staff/tasks','show_staff_stasks');
});

// staff reports
Route::controller(StaffReportsController::class)->group(function () {
    Route::post('add/report', 'add_report');
    Route::get('show/reports', 'show_reports');
    Route::post('update/report/{id}', 'update_report');
    Route::delete('delete/report/{id}', 'delete_report');
});

// purchases
Route::controller(PurchasesController::class)->group(function () {
    Route::post('add/purchases', 'add_purchases');
    Route::get('show/purchases', 'show_purchases');
    Route::post('update/purchases/{id}', 'update_purchases');
    Route::delete('delete/purchases/{id}', 'delete_purchases');
});


// checks
Route::controller(ChecksController::class)->group(function () {
    Route::post('add/check', 'add_check');
    Route::get('show/check', 'show_check');
    Route::post('update/check/{id}', 'update_check');
    Route::get('delete/check/{id}', 'delete_check');
    Route::post('import/checks', 'import_checks');
});

//rent
Route::controller(RentController::class)->group(function () {
    Route::post('add/rent', 'add_rent');
    Route::get('show/rent', 'show_rent');
    Route::post('update/rent/{id}', 'update_rent');
    Route::delete('delete/rent/{id}', 'delete_rent');
});

Route::controller(ServiceController::class)->group(function () {
    Route::post('add/service', 'add_service');
    Route::get('show/services', 'show_services');
    Route::post('update/service/{id}', 'update_service');
    Route::delete('delete/service/{id}', 'delete_service');
});


// service workers
Route::controller(ServiceWorkerController::class)->group(function () {
    Route::post('add/service/worker/{id}', 'add_service_worker');
    Route::get('update/service/worker/{service}/{id}', 'edit_service_worker');
    Route::get('show/service/workers/{id}', 'show_service_workers');
    Route::post('show/service/worker', 'show_service_worker');
    Route::delete('delete/service/worker/{id}', 'delete_service_worker');
});

Route::controller(TasksController::class)->group(function () {
    Route::post('add/task/{id}', 'add_task');
    Route::post('update/task/{id}', 'update_task');
    Route::delete('delete/task/{id}', 'delete_task');
    Route::get('show/tasks', 'show_tasks');
    Route::get('show/worker/tasks/{id}', 'show_worker_tasks');
    Route::get('change/task/status/{id}', 'change_task_status');
});

// statics
Route::controller(StatisticsController::class)->group(function () {
    Route::get('invoices/statics', 'invoices_count');
    Route::get('sales/statics', 'getSalesPerBranch');
    Route::get('address/statistics','addressـstatistics');
    Route::get('problems/statistics','problemsـstatistics');
    Route::get('tasks/worker/statistics','tasks_per_worker_statistics');
});


// Setting Controller
Route::controller(SettingController::class)->group(function () {
    Route::post('setting/update/{id}', 'setting_update');
    Route::get('setting/get/{id}', 'setting_get');
});

// address controller
Route::controller(AddressController::class)->group(function () {
    Route::post('add/address', 'add_address');
    Route::post('update/address/{id}', 'update_address');
    Route::delete('delete/address/{id}', 'delete_address');
    Route::get('show/address', 'show_address');
});


// car type controller
Route::controller(CarTypeController::class)->group(function () {
    Route::post('add/car/type', 'add_car_type');
    Route::post('update/car/type/{id}', 'update_car_type');
    Route::delete('delete/car/type/{id}', 'delete_car_type');
    Route::get('show/car/types', 'show_car_types');
});


Route::controller(CarProcessController::class)->group(function(){
    Route::post('add/new/process','add_new_process');
    Route::get('show/car/process','show_car_process');
});
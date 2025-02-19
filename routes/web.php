<?php

use App\Http\Controllers\webController\Checks_controller;
use App\Http\Controllers\webController\Client_controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\webController\Staff_controller;
use App\Http\Controllers\webController\Dashboard_controller;
use App\Http\Controllers\webController\Invoices_controller;
use App\Http\Controllers\webController\Purchases_controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;






// routes/web.php

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {


    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // ----------------------------------------------------------------------------------------------






    Route::get('/', function () {
        return view('auth.login');
    });





    Route::controller(Dashboard_controller::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });



    // invocies controller start
    Route::controller(Invoices_controller::class)->group(function () {
        Route::get('show/invoices', 'show_invoices')->name('show.invoices');
        Route::get('add/invoice', 'add_invoice')->name('add.invoice');
        Route::post('add/invoice', 'add_new_invoice')->name('add.invoice');
        Route::get('edit/invoice/{id}', 'edit_invoice')->name('edit.invoice');
        Route::get('print/invoice/{id}', 'print_invoice')->name('print.invoice');
        Route::get('delete/invoice/{id}', 'delete_invoice')->name('delete.invoice');
        Route::post('edit/invoice/confirmation{id}', 'edit_invoice_confimation')->name('edit.invoice.confirmation');
        Route::get('show/branch/invoices/{id}', 'show_branch_invoices')->name('show.branch.invoices');
    });
    // invocies controller end





    // clients controller start
    Route::controller(Client_controller::class)->group(function () {
        Route::get('show/clients/page', 'show_clients_page')->name('show.clients.page')->middleware('auth');
    });
    // clients controller end






    // staff controller start
    Route::controller(Staff_controller::class)->group(function () {
        Route::get('show/staff/page', 'show_staff_page')->name('show.staff.page')->middleware('auth');
        Route::get('add/staff/page', 'add_staff_page')->name('add.staff.page')->middleware('auth');
        Route::post('add/staff/page', 'add_staff')->name('add.staff')->middleware('auth');
        Route::get('delete/staff/{id}', 'delete_staff')->name('delete.staff')->middleware('auth');
        Route::get('edit/staff/{id}', 'edit_staff')->name('edit.staff')->middleware('auth');
        Route::post('edit/staff/{id}', 'edit_staff_confirm')->name('edit.staff')->middleware('auth');
        Route::get('reset/staff/data', 'reset_staff_data')->name('reset.staff.data')->middleware('auth');
    });
    // staff controller end


    // checks controller start
    Route::controller(Checks_controller::class)->group(function () {
        Route::get('show/checks/page', 'show_checks_page')->name('show.checks.page')->middleware('auth');
        Route::get('add/check/page', 'add_check_page')->name('add.check.page')->middleware('auth');
        Route::post('add/check', 'add_check')->name('add.check')->middleware('auth');
        Route::get('delete/check/{id}', 'delete_check')->name('delete.check')->middleware('auth');
        Route::get('edit/check/{id}', 'edit_check')->name('edit.check')->middleware('auth');
        Route::post('edit/check/confirm/{id}', 'edit_check_confirm')->name('edit.check.confirm')->middleware('auth');
        
    });
    // checks controller end


    // Purchases Controller start
    Route::controller(Purchases_controller::class)->group(function () {
        Route::get('show/purcheases/page','show_purchases_page')->name('show.purcheases.page')->middleware('auth');
        Route::get('add/purcheases/page','add_purchases_page')->name('add.purcheases.page')->middleware('auth');
        Route::post('add/purcheases','add_purchases')->name('add.purchase')->middleware('auth');
    });
    // Purchases Controller end




});

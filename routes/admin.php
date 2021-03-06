<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LeaveTypeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\NoticeboardController;
use App\Http\Controllers\Admin\SalaryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\LeaveController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Employee\DashboardController;


Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    Route::post('/login' , [LoginController::class, 'adminLogin'])->name('login');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('users/get-data', [UserController::class, 'getData']);
    Route::resource('/users', UserController::class);

    Route::resource('/employees', EmployeeController::class);
    Route::resource('/salaries', SalaryController::class);

    Route::resource('/leaves', LeaveController::class);
    Route::put('/leaves/accept/{id}', [LeaveController::class,'accept'])->name('leaves.accept');
    Route::put('/leaves/decline/{id}', [LeaveController::class,'decline'])->name('leaves.decline');

    Route::get('/employees/bankDetail/{id}', [EmployeeController::class, 'bankDetail'])->name('employee.detail');
    Route::get('/employees/bankDetail/edit/{id}', [EmployeeController::class, 'bankDetailEdit'])->name('employee.bankDetail.edit');
    Route::post('/employees/bankDetail/update/{id}', [EmployeeController::class, 'bankDetailUpdate'])->name('employee.bankDetail.update');

    Route::resource('/departments', DepartmentController::class);
    Route::resource('/designations', DesignationController::class);

    Route::resource('/expenses', ExpenseController::class);
    Route::resource('/awards', AwardController::class);
    Route::resource('/noticeboards', NoticeboardController::class);
    Route::resource('/settings', SettingController::class);
    Route::post('/users_password', [UserController::class, 'changePassword'])->name('password.update');

});




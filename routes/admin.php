<?php

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\NoticeboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    Route::post('/login' , [LoginController::class, 'adminLogin'])->name('login');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('users/get-data', [UserController::class, 'getData']);
    Route::resource('/users', UserController::class);
    Route::resource('/employees', EmployeeController::class);
    Route::get('/admin/employees/bankDetail/{id}', [EmployeeController::class, 'bankDetail'])->name('employee.bankDetail');

    Route::resource('/departments', DepartmentController::class);
    Route::resource('/expenses', ExpenseController::class);
    Route::resource('/awards', AwardController::class);
    Route::resource('/noticeboards', NoticeboardController::class);
    Route::resource('/settings', SettingController::class);
    Route::post('/users_password', [UserController::class, 'changePassword'])->name('password.update');

});

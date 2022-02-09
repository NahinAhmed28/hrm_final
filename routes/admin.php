<?php

use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ExpenseController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;




Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    Route::post('/login' , [LoginController::class, 'adminLogin'])->name('login');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('users/get-data', [UserController::class, 'getData']);
    Route::resource('/users', UserController::class);
    Route::resource('/departments', DepartmentController::class);
    Route::resource('/expenses', ExpenseController::class);
    Route::post('/users_password', [UserController::class, 'changePassword'])->name('password.update');

});

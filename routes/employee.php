<?php

use App\Http\Controllers\Employee\DashboardController;
use App\Http\Controllers\Employee\LeaveController;
use Illuminate\Support\Facades\Route;

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('/leaves', LeaveController::class);
    Route::get('/leaves/create', [\App\Http\Controllers\Admin\LeaveTypeController::class,'empCreate'])->name('leaves.create');
    Route::post('/leaves/{id}', [\App\Http\Controllers\Admin\LeaveTypeController::class,'empCreate'])->name('leaves.store');
    Route::get('/noticeboards', [\App\Http\Controllers\Admin\NoticeboardController::class,'empIndex'])->name('noticeboards');
    Route::get('/profile', [\App\Http\Controllers\Admin\UserController::class,'index'])->name('profile.index');
});

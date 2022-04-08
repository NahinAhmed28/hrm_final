<?php

use App\Http\Controllers\Employee\DashboardController;
use App\Http\Controllers\Employee\LeaveController;
use Illuminate\Support\Facades\Route;

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    Route::resource('/leaves', LeaveController::class);
    Route::get('/noticeboards', [\App\Http\Controllers\Admin\NoticeboardController::class,'empNoticeIndex'])->name('noticeboards');
    Route::get('/noticeboards/show/{id}', [\App\Http\Controllers\Admin\NoticeboardController::class,'empNoticeShow'])->name('noticeboards.show');
    Route::get('/profile', [\App\Http\Controllers\Admin\UserController::class,'index'])->name('profile.index');
});

<?php

use App\Http\Controllers\Employee\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('employee')->name('employee.')->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
});

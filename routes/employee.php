<?php

use App\Http\Controllers\Employee\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('employee')->name('employee.')->middleware([''])->group(function () {
    Route::post('/dashboard', [DashboardController::class, 'dashBoard'])->name('dashboard');
});

<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Admin routes
Route::prefix('admin')->group(function () {
    // Route::post('register', [AdminAuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    
    // Route::middleware(['auth:admin', 'scope:admin'])->group(function () {
    //     Route::post('logout', [AdminAuthController::class, 'logout']);
    //     Route::get('profile', [AdminAuthController::class, 'admin']);
    // });
});

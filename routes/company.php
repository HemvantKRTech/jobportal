<?php

use App\Http\Controllers\Company\CompanyController;
use Illuminate\Support\Facades\Route;


Route::middleware('company.guest')->group(function() {
    Route::get('login', [CompanyController::class, 'login'])->name('login');

    Route::get('register', [CompanyController::class, 'showRegistrationForm'])->name('register.form');
    Route::post('login', [CompanyController::class, 'companylogin'])->name('login.post');
    Route::get('auth/redirect/{provider}', [CompanyController::class, 'redirect'])->name('social.redirect');
    Route::post('/register', [CompanyController::class, 'register'])->name('register');

    Route::get('password/reset', [CompanyController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [CompanyController::class, 'sendResetLinkEmail']);

    Route::get('password/reset/{token}', [CompanyController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [CompanyController::class, 'reset'])->name('password.request.sore');

    Route::get('new-password/{id}', [CompanyController::class, 'newPasswordForm'])->name('password.newPassword');
    Route::post('password/set-password/{id}', [CompanyController::class, 'sepPassword'])->name('password.setPassword');

    // Route::get('dashboard', [CompanyController::class, 'dashboard'])->name('dashboard');

    
   
});
Route::middleware('company.auth')->group(function () {
    // This route is protected by the 'company.auth' middleware, ensuring that only authenticated users can access it.
    Route::get('dashboard', [CompanyController::class, 'dashboard'])->name('dashboard');
    Route::post('logout', [CompanyController::class, 'logout'])->name('logout');

});
Route::get('auth/callback/{provider}', [CompanyController::class, 'callback'])->name('social.callback');




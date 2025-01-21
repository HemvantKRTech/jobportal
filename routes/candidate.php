<?php

use App\Http\Controllers\Candidate\CandidateController;
use Illuminate\Support\Facades\Route;


// Route::middleware('company.guest')->group(function() {
    Route::get('login', [CandidateController::class, 'login'])->name('login');

    Route::get('register', [CandidateController::class, 'showRegistrationForm'])->name('register.form');
    Route::post('login', [CandidateController::class, 'companylogin'])->name('login.post');
    Route::get('auth/redirect/{provider}', [CandidateController::class, 'redirect'])->name('social.redirect');
    Route::post('/register', [CandidateController::class, 'register'])->name('register');

    Route::get('password/reset', [CandidateController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [CandidateController::class, 'sendResetLinkEmail']);

    Route::get('password/reset/{token}', [CandidateController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [CandidateController::class, 'reset'])->name('password.request.sore');

    Route::get('new-password/{id}', [CandidateController::class, 'newPasswordForm'])->name('password.newPassword');
    Route::post('password/set-password/{id}', [CandidateController::class, 'sepPassword'])->name('password.setPassword');


    
   
// });
// Route::middleware('company.auth')->group(function () {
//     Route::get('dashboard', [CandidateController::class, 'dashboard'])->name('dashboard');
//     Route::post('logout', [CandidateController::class, 'logout'])->name('logout');

// });
// Route::get('auth/callback/{provider}', [CandidateController::class, 'callback'])->name('social.callback');




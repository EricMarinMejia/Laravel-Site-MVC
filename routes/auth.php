<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\VerificationController;
 use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [ResetPasswordController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [ResetPasswordController::class, 'store'])
                ->name('password.email');

     Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                 ->name('password.reset');

     Route::post('reset-password', [NewPasswordController::class, 'store'])
                 ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [VerificationController::class, '__invoke'])
                ->name('verification.notice');

     Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                 ->middleware(['signed', 'throttle:6,1'])
                 ->name('verification.verify');

     Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                 ->middleware('throttle:6,1')
                 ->name('verification.send');

     Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                 ->name('password.confirm');

     Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

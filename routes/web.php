<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::controller(RepairController::class)->group(function () {
    Route::get('/', 'index')->middleware(['auth','verified']);
    Route::get('/repair/create', 'create')->middleware(['auth','verified']);
    Route::get('/repair/{id}', 'show')->middleware(['auth','verified']);
    Route::get('/repair/{id}/edit', 'edit')->middleware(['auth','verified']);

    Route::post('/repair', 'store')->middleware(['auth','verified']);
    Route::patch('/repair/{id}', 'update')->middleware(['auth','verified']);
    Route::delete('/repair/{id}', 'destroy')->middleware(['auth','verified']);
});

Route::controller(VehicleController::class)->group(function () {
    Route::get('/vehicle', 'index')->middleware(['auth','verified']);
    Route::get('/vehicle/create', 'create')->middleware(['auth','verified']);
    Route::get('/vehicle/{id}', 'show')->middleware(['auth','verified']);
    Route::get('/vehicle/{id}/edit', 'edit')->middleware(['auth','verified']);

    Route::post('/vehicle', 'store')->middleware(['auth','verified']);
    Route::patch('/vehicle/{id}', 'update')->middleware(['auth','verified']);
    Route::delete('/vehicle/{id}', 'destroy')->middleware(['auth','verified']);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->middleware(['auth','verified']);
    Route::get('/user/create', 'create')->middleware(['auth','verified']);
    Route::get('/user/{id}', 'show')->middleware(['auth','verified']);

    Route::post('/user', 'store')->middleware(['auth','verified']);
    
    //Not yet implemented routes - not part of the course outline
    //Route::get('/user/{id}/edit', 'edit');
    //Route::patch('/user/{id}', 'update');
    //Route::delete('/user/{id}', 'destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

//Routes for email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

//Routes for Authentification
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Retourne à / si la route n'existe pas
Route::get('/{any}', function () {
    return redirect('/');
})->where('any', '.*');
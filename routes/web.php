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
    Route::resource('repairs', RepairController::class);

    Route::get('/', 'index');
    Route::get('/repair/create', 'create');
    Route::get('/repair/{id}', 'show');
    Route::get('/repair/{id}/edit', 'edit');

    Route::post('/repair', 'store');
    Route::patch('/repair/{id}', 'update');
    Route::delete('/repair/{id}', 'destroy');
});

Route::controller(VehicleController::class)->group(function () {
    Route::resource('vehicles', VehicleController::class);

    Route::get('/vehicle', 'index');
    Route::get('/vehicle/create', 'create');
    Route::get('/vehicle/{id}', 'show');
    Route::get('/vehicle/{id}/edit', 'edit');

    Route::post('/vehicle', 'store');
    Route::patch('/vehicle/{id}', 'update');
    Route::delete('/vehicle/{id}', 'destroy');
});

Route::controller(UserController::class)->group(function () {
    Route::resource('users', UserController::class);

    Route::get('/user', 'index');
    Route::get('/user/create', 'create');
    Route::get('/user/{id}', 'show');
    //Route::get('/user/{id}/edit', 'edit');

    Route::post('/user', 'store');
    //Route::patch('/user/{id}', 'update');
    //Route::delete('/user/{id}', 'destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();



/*
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
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
*/



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/{any}', function () {
    return redirect('/');
})->where('any', '.*');

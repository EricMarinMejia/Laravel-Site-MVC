<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserController;
//use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

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

//Dashboard
Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['verified']], function() {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/{any}', function () {
    return redirect('/');
})->where('any', '.*');
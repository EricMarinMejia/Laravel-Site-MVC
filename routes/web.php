<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\UserController;

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
    Route::get('/vehicle',[VehicleController::class, 'index']);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user',[UserController::class, 'index']);
});

Route::get('/{any}', function () {
    return redirect('/');
})->where('any', '.*');

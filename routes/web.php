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
    Route::get('/', 'index');
    Route::get('/repair',[RepairController::class, 'index']);
    //Other CRUD operations will go here
});

Route::controller(VehicleController::class)->group(function () {
    Route::get('/vehicle',[VehicleController::class, 'index']);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user',[UserController::class, 'index']);
});

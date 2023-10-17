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
    Route::patch('/repair/{id}', 'update');     //NOT IMPLEMENTED
    Route::delete('/repair/{id}', 'destroy');   //NOT IMPLEMENTED
});

Route::controller(VehicleController::class)->group(function () {
    Route::get('/vehicle',[VehicleController::class, 'index']);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user',[UserController::class, 'index']);
});

/*

EXEMPLE GÉNÉRIQUE

Route::controller(ArticleController::class)->group(function () {
    Route::resource('articles',ArticleController::class);
  
      Route::get('/', 'index');
      Route::get('/article/create', 'create');
      Route::get('/article/{id}', 'show');
      Route::get('/article/{id}/edit', 'edit');
  
  
      Route::post('/article', 'store');
      Route::patch('/article/{id}', 'update');
      Route::delete('/article/{id}', 'destroy');
  
  });
*/

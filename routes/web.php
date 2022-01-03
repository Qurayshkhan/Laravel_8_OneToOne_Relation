<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\MechanicsController;
use App\Http\Controllers\OwnersController;
use App\Models\mechanics;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('add_mechanics',[MechanicsController::class,'add_mechanics']);
Route::get('add_cars/{id}',[CarsController::class,'add_cars']);
Route::get('add_owners/{id}',[OwnersController::class,'add_owners']);
Route::get('show_owners/{id}',[OwnersController::class,'show_owners']);


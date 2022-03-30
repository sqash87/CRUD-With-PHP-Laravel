<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manufacturerController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\CustomerController;
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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/equipments', function () {
    return view('equipments');
});

Route::get('/manufacturers', function () {
    return view('manufacturers');
});

Route::get('/customers', function () {
    return view('customers');
});


Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::resource('/manufacturers', ManufacturerController::class);
Route::resource('/customers', CustomerController::class);
Route::resource('/equipments', EquipmentController::class);

Route::fallback(function(){
    return view('fallback');
});
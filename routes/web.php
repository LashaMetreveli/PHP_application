<?php

use Illuminate\Support\Facades\Route;

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

Route::get('cars', '\App\Http\Controllers\CarController@viewAllCars')->name('car.all');
Route::post('car/add', '\App\Http\Controllers\CarController@addNewCar')->name('car.add');
Route::post('car/delete', '\App\Http\Controllers\CarController@deleteCar')->name('car.delete');
Route::get('car/edit/{id}', '\App\Http\Controllers\CarController@editCar')->name('car.edit');
Route::post('car/update/{id}', '\App\Http\Controllers\CarController@updateCar')->name('car.update');


Route::get('/', function () {
    return view('welcome');
});

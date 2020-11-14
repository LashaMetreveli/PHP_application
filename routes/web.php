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

Route::get('/', function () {
    return view('/layouts/main');
});

Route::get('employees', '\App\Http\Controllers\EmployeeController@viewAllEmployees')->name('employee.all');
Route::post('employee/add', '\App\Http\Controllers\EmployeeController@addNewEmployee')->name('employee.add');
Route::post('employee/delete', '\App\Http\Controllers\EmployeeController@deleteEmployee')->name('employee.delete');
Route::get('employee/edit/{id}', '\App\Http\Controllers\EmployeeController@editEmployee')->name('employee.edit');
Route::post('employee/update/{id}', '\App\Http\Controllers\EmployeeController@updateEmployee')->name('employee.update');


Route::get('companies', '\App\Http\Controllers\CompanyController@viewAllCompanies')->name('company.all');
Route::post('company/add', '\App\Http\Controllers\CompanyController@addNewCompany')->name('company.add');
Route::post('company/delete', '\App\Http\Controllers\CompanyController@deleteCompany')->name('company.delete');
Route::get('company/edit/{id}', '\App\Http\Controllers\CompanyController@editCompany')->name('company.edit');
Route::post('company/update/{id}', '\App\Http\Controllers\CompanyController@updateCompany')->name('company.update');

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
    return view('welcome');
});

Route::group(['prefix' => '/employee'], function () {
    Route::get('/list', 'EmployeeController@list');
    Route::delete('/{id}', 'EmployeeController@delete');
    Route::get('/{id}', 'EmployeeController@get');
    Route::post('/create', 'EmployeeController@create');
    Route::put('/{id}', 'EmployeeController@update');
});
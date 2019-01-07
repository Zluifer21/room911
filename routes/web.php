<?php

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

Route::get('/', 'HomeController@index');
Route::resource('employees', 'EmployeeController');
Route::get('logs/{id}', 'LogController@index');
Route::match(['get', 'post'],'access_room','EmployeeController@access_room');
Route::post('filter','EmployeeController@filter');

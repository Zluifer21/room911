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



Route::match(['get', 'post'],'access_room','EmployeeController@access_room');
Auth::routes();


Route::group(['middleware' => ['role:admin']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('employees', 'EmployeeController');
    Route::get('/', 'HomeController@index');
    Route::get('logs/{id}', 'LogController@index');
    Route::post('filter','EmployeeController@filter');

});

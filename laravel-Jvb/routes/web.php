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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', 'StudentController@create');
Route::post('register', 'StudentController@store');
Route::get('complete-register', 'StudentController@index');
Route::get('students','StudentController@list');
Route::get('edit/student/{id}', 'StudentController@edit');
Route::post('edit/student/{id}', 'StudentController@update');
Route::get('/delete/student/{id}', 'StudentController@delete');



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

Route::group(['prefix'=>'users'],function(){
	Route::get('/users',[
		'uses'=>'UserController@getAllUsers',
		'as'=>'user.index'
	]);
	Route::get('/create',[
		'uses'=>'UserController@postCreateUser',
		'as'=>'user.create'
	]);
	Route::post('store',[
		'uses'=>'UserController@postStoreUser',
		'as'=>'user.store'
	]);
	Route::get('show',[
		'uses'=>'UserController@postShowUser',
		'as'=>'user.show'
	]);
	Route::get('{id}/edit',[
		'uses'=>'UserController@postEditUser',
		'as'=>'user.edit'
	]);
	Route::post('{id}/update',[
		'uses'=>'UserController@postUpdateUser',
		'as'=>'user.update'
	]);
	Route::get('{id}/delete',[
		'uses'=>'UserController@postDeleteUser',
		'as'=>'user.delete'
	]);
});


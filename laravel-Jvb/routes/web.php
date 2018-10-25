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
		'uses'=>'UserController@index',
		'as'=>'user.index'
	]);
	Route::get('create/{id?}',[
		'uses'=>'UserController@create',
		'as'=>'user.create'

	]);
	Route::post('store',[
		'uses'=>'UserController@store',
		'as'=>'user.store'
	]);
	Route::get('show',[
		'uses'=>'UserController@show',
		'as'=>'user.show'
	]);
	Route::get('{id}/edit',[
		'uses'=>'UserController@edit',
		'as'=>'user.edit'
	]);
	Route::post('{id}/update',[
		'uses'=>'UserController@update',
		'as'=>'user.update'
	]);
	Route::get('{id}/destroy',[
		'uses'=>'UserController@destroy',
		'as'=>'user.destroy'
	])->middleware('auth');
	
});
Route::get('login',[
	'uses'=>'LoginController@getLogin',
	'as'=>'login'
	]);
Route::post('postLogin','LoginController@postLogin');
Route::get('logout','LoginController@logout');

// Route::resource('users', 'UserController');




// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

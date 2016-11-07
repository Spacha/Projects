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

/* GENERAL */

Route::get('/', function () {
    return view('auth/login');
});

/* AUTH */

Auth::routes();


Route::group(['middleware' => 'auth'], function () {

	/* PROJECT */

	Route::get('/', 'ProjectController@index');
	Route::get('/projects', 'ProjectController@index');
	
	Route::get('/projects/view/{id}', 'ProjectController@view');
	Route::get('/projects/create', 'ProjectController@create');
	Route::get('/projects/edit/{id}', 'ProjectController@edit');

	Route::post('/projects/save', 'ProjectController@save');
});
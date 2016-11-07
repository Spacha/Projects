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

	// Project front-page
	Route::get('/', 'ProjectController@index');
	Route::get('/projects', 'ProjectController@index');
	
	// Modify projects
	Route::get('/projects/create', 'ProjectController@create');

	// Save project
	Route::post('/projects/save', 'ProjectController@save');

	Route::get('/projects/edit/{id}', 'ProjectController@edit');

	// View project
	Route::get('/projects/{id}', 'ProjectController@view');

});
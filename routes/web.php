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

// Authentication Routes
Auth::routes();
Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['middleware' => 'auth'], function() {

	// Page Routes
	Route::get('/', 'HomeController@index');

	// User Routes
	Route::post('/users/search/{search_by?}/{search?}', ['as' => 'users.search', 'uses' => 'UserController@search']);
	Route::resource('users', 'UserController');
});


<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

// Route::get('apartments', array('uses' => 'ApartmentController@index'));

Route::group(array('prefix' => '/apartments'), function()
{
	Route::get('/', array('uses' => 'ApartmentController@index', 'as' => 'apartments-home'));
});

Route::group(array('prefix' => '/users'), function()
{
	Route::get('/', array('uses' => 'UserController@index', 'as' => 'users-home'));

	Route::get('/create', array('uses' => 'UserController@create'));

	
});

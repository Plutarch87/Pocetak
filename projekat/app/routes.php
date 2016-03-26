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

Route::get('/apartments', array(
		'uses' => 'ApartmentController@index', 
		'as' => 'apartments-home'
		));


Route::group(array('prefix' => '/users'), function()
{
	
	Route::get('/', array(
		'uses' => 'UserController@index'		
		));

	Route::get('/create', array(
		'uses' => 'UserController@create'
		));

	Route::get('/login', array(
		'uses' => 'UserController@getLogin',
		'as' => 'login-user'
		));
});

Route::group(array('prefix' => '/users'), function()
{

	Route::post('/create', array(
		'uses' => 'UserController@store',
		'as' => 'register-user'
		));

	Route::post('/login', array(
		'uses' => 'UserController@postLogin',
		'as' => 'postLogin'
		));
});

Route::group(array('before' => 'auth'), function()
{
	Route::get('/users/edit', array(
		'uses' => 'UserController@edit',
		'as' => 'edit-profile'
		));
});


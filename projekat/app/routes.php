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
	return View::make('apartments.index');
});

// Route::get('apartments', array('uses' => 'ApartmentController@index'));

Route::group(array('prefix' => '/apartments'), function()
{
	Route::get('/', array('uses' => 'ApartmentController@get_index', 'as' => 'apartments-home'));
});
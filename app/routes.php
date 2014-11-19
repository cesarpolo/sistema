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
	if (Auth::check())
	{
		Return View:: make ('parent');
	}
	else
	{
		Return View:: make ('login');
	}
});

Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logOut');

Route::get('recovery', 'RemindersController@getRemind');
Route::post('recovery', 'RemindersController@postRemind');


Route::group(array('before' => 'auth'), function()
{
    Route::get('parent', function()
	{
		Return View:: make ('parent');
	});
	Route::get('profile', 'ProfileController@index');
});






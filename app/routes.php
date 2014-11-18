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
	Return View:: make ('login');
});

Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@logOut');
Route::get('recovery', 'RemindersController@getRemind');
Route::post('recovery', 'RemindersController@postRemind');
Route::get('home', array('before' => 'auth', function()
{
    return View::make('home');
}));


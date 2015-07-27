<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@welcome');

Route::get('/register', 'PagesController@register');
Route::post('/register', 'PagesController@newuser');
Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/profile', 'UsersController@profile');
Route::post('/profile', 'UsersController@update');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
	]);
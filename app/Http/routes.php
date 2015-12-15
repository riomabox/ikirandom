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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('users', 'UserController@index');

Route::get('users/create', 'UserController@create');
Route::post('users/create',array('before' => 'csrf','uses' => 'UserController@create'));

Route::get('users/delete/{id}', 'UserController@delete');

Route::get('users/update/{id}', 'UserController@update');
Route::post('users/update/{id}',array('before' => 'csrf','uses' => 'UserController@update'));

Route::get('sales', 'SaleController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

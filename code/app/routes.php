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

//Route::get('/', 'LoginController@home');

Route::get('/', 'LoginController@home');

Route::get('/login', 'LoginController@login');

Route::post('/login', 'LoginController@authen');

Route::post('/logout', 'LoginController@logout');

/*
Route::get('/test', function() {
return View::make('test');
});
*/
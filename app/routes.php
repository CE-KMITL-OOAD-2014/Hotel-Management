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

//Route::get('/', 'HomeController@home');

Route::get('/', 'HomeController@home');

Route::get('/login', 'HomeController@login');

Route::post('/login', 'HomeController@authen');

Route::post('/logout', 'HomeController@logout');

Route::get('/adduser', 'AdminController@viewAdduser');

Route::post('/adduser', 'AdminController@adduser');

Route::get('/addRoom', 'ManagerController@viewAddRoom');

Route::post('/addRoom', 'ManagerController@addRoom');

Route::post('/createAdmin', 'HomeController@createAdmin');

/*
Route::get('/test', function() {
return View::make('test');
});
*/
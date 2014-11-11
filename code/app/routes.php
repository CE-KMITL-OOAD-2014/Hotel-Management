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

Route::get('/addStaff', 'AdminController@viewAddStaff');

Route::post('/addStaff', 'AdminController@addStaff');

Route::get('/addCustomer', 'AdminController@viewAddCustomer');

Route::post('/addCustomer', 'AdminController@addCustomer');

Route::get('/addRoom', 'ManagerController@viewAddRoom');

Route::post('/addRoom', 'ManagerController@addRoom');

Route::get('/checkin', 'ReceptionistController@viewCheckin');

Route::post('/checkin', 'ReceptionistController@checkin');

Route::get('/addMeal', 'KitchenController@viewAddMeal');

Route::post('/addMeal', 'KitchenController@addMeal');

Route::get('/addGuest', 'ReceptionistController@viewAddGuest');

Route::post('/addGuest', 'ReceptionistController@addGuest');

Route::post('/createAdmin', 'HomeController@createAdmin');




Route::get('/addCleanReq', 'CustomerServiceController@addCleanReq');

//Route::post('/checkin', 'ReceptionistController@checkin');
/*
Route::get('/test', function() {
return View::make('test');
});
*/
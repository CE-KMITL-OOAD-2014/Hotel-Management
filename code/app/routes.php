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

// Home
Route::get('/', 'HomeController@home');
Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@authen');
Route::post('/logout', 'HomeController@logout');

//Admin
Route::get('/addStaff', 'AdminController@viewAddStaff');
Route::post('/addStaff', 'AdminController@addStaff');
Route::get('/addCustomer', 'AdminController@viewAddCustomer');
Route::post('/addCustomer', 'AdminController@addCustomer');

//Manager
Route::get('/addRoom', 'ManagerController@viewAddRoom');
Route::post('/addRoom', 'ManagerController@addRoom');


//Receptionist
Route::get('/checkin', 'ReceptionistController@viewCheckin');
Route::get('/checkout', 'ReceptionistController@viewCheckout');
Route::post('/checkout', 'ReceptionistController@checkout');
Route::post('/checkin', 'ReceptionistController@checkin');
Route::get('/addGuest', 'ReceptionistController@viewAddGuest');
Route::post('/addGuest', 'ReceptionistController@addGuest');
Route::get('/pay', 'ReceptionistController@viewPay');
Route::post('/confirmPay', 'ReceptionistController@confirmPay');
Route::post('/pay', 'ReceptionistController@pay');
//Route::post('/waitForCheck', 'ReceptionistController@waitForCheck');


//Customer Service
Route::get('/addCleanReq', 'CustomerServiceController@addCleanReq');
Route::get('/addMealReq', 'CustomerServiceController@viewAddMealReq');
Route::post('/addMealReq', 'CustomerServiceController@addMealReq');
Route::get('/completeClean', 'CustomerServiceController@completeClean');
Route::get('/completeOrder', 'CustomerServiceController@completeOrder');

//Maid
Route::get('/checkClean', 'MaidController@viewCheckClean');
Route::post('/acceptClean', 'MaidController@acceptClean');
Route::post('/checkRoom', 'MaidController@viewCheckRoom');
Route::post('/checkRoomComplete', 'MaidController@checkRoomComplete');

//Kitchen
Route::get('/addMeal', 'KitchenController@viewAddMeal');
Route::post('/addMeal', 'KitchenController@addMeal');
Route::get('/checkOrder','KitchenController@viewCheckOrder');
Route::post('/acceptOrder', 'KitchenController@acceptOrder');

//temp
Route::post('/createAdmin', 'HomeController@createAdmin');

//Route::post('/checkin', 'ReceptionistController@checkin');
/*
Route::get('/test', function() {
return View::make('test');
});
*/
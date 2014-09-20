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


/*-----Sentry Authentication-----*/
/*Consumer*/
Route::filter('consumer', function()
{	
	$user = Sentry::getUser();
	if($user == null){
		return "User not logged in";
	}else if(!$user->hasAccess('consumer')){
    	return "Access Forbidden";
    }
});

/*Cashier*/
Route::filter('cashier',function(){
	$user = Sentry::getUser();
	if($user == null){
		return "User not logged in";
	}else if(!$user->hasAccess('cashier')){
    	return "Access Forbidden";
    }
});

/*Area Manager*/
Route::filter('manager',function(){
	$user = Sentry::getUser();
	if($user == null){
		return "User not logged in";
	}else if(!$user->hasAccess('manager')){
    	return "Access Forbidden";
    }
});

/*IT Personnel*/
Route::filter('personnel',function(){
	$user = Sentry::getUser();
	if($user == null){
		return "User not logged in";
	}else if(!$user->hasAccess('personnel')){
    	return "Access Forbidden";
    }
});

/*Consumer Area Development*/
Route::filter('cad',function(){
	$user = Sentry::getUser();
	if($user == null){
		return "User not logged in";
	}else if(!$user->hasAccess('cad')){
    	return "Access Forbidden";
    }
});

/*System Admin*/
Route::filter('admin',function(){
	$user = Sentry::getUser();
	if($user == null){
		return "User not logged in";
	}else if(!$user->hasAccess('admin')){
    	return "Access Forbidden";
    }
});

/*----Attaching filters to routes----*/
Route::when('cashier/*', 'cashier');
Route::when('manager/*', 'manager');
Route::when('it-personnel/*', 'personnel');
Route::when('consumer-area-development/*', 'cad');
Route::when('admin/*', 'admin');

/*-----Routing------*/
Route::get('/', function()
{
	return View::make('login');
});
Route::get('/index',function(){
	return View::make('login');
});

/* Controller Routes */
Route::post('/index','AuthController@validateLogin');
//Admin Routes
Route::get('/admin/home','AdminController@showIndex');
Route::get('/admin/logout','AuthController@logout');
Route::get('/admin/report','AdminController@showReports');
Route::get('/admin/user-maintenance','UserMaintenanceController@showUserMaintenance');
Route::get('/admin/add-customer','UserMaintenanceController@showAddCustomer');
Route::get('/admin/billing','AdminController@showBilling');
Route::get('/admin/cashier','AdminController@showCashier');
Route::get('/admin/disconnected-bills','AdminController@showDisconnectedBills');
Route::get('/admin/wheeling-rates','AdminController@showWheelingRates');
Route::get('/admin/add-user','UserMaintenanceController@showAddUser');
//crud ng users
Route::put('/admin/update-user/{id}','UserMaintenanceController@modifyUser');
Route::get('/admin/activation-user/{id}','UserMaintenanceController@activation');
Route::post('/admin/add-user','UserMaintenanceController@saveUser');
Route::post('/admin/search-user','UserMaintenanceController@searchUser');
Route::get('/admin/edit-user/{search_key}','UserMaintenanceController@showEditUser');
Route::post('/admin/wheeling-rates','AdminController@saveWheelingRates');

Route::get('/test','TestController@test');
Route::post('/admin/location/search','LocationController@search');
Route::post('/admin/routes/search','RoutesController@search');
Route::post('/admin/account/search','CustomerController@search');
Route::get('/admin/add-location/{userId}','UserMaintenanceController@showAddLocation');
Route::post('/admin/add-location/{userId}', 'UserMaintenanceController@addLocationToUser');
Route::get('/admin/add-account/{userId}','CustomerController@showCreateForm');

/*Resource Controller*/
Route::resource('admin/location','LocationController');
Route::resource('admin/routes','RoutesController');
Route::resource('admin/account','CustomerController');
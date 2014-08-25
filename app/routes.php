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
Route::get('/admin/user-maintenance','AdminController@showUserMaintenance');
Route::get('/admin/add-customer','AdminController@showAddCustomer');
Route::get('/admin/billing','AdminController@showBilling');
Route::get('/admin/cashier','AdminController@showCashier');
Route::get('/admin/disconnected-bills','AdminController@showDisconnectedBills');
Route::get('/admin/wheeling-rates','AdminController@showWheelingRates');
Route::get('/admin/add-user','AdminController@showAddUser');
//crud ng users
Route::patch('/admin/edit-user','AdminController@modifyUser');
Route::post('/admin/add-user','AdminController@saveUser');
Route::post('/admin/search-user','AdminController@searchUser');
Route::get('/admin/edit-user/{search_key}','AdminController@showEditUser');
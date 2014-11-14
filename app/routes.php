<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
 */

Route::get('/', 'HomeController@showHomepage');

Route::get('login', 'AuthController@showLogin');
Route::get('logout', 'AuthController@logout');
Route::get('signup', 'AuthController@showSignUp');

Route::group(array('before' => 'csrf'), function () {
	Route::post('login', array('as' => 'login', 'uses' => 'AuthController@tryLogin'));
	Route::post('signup', array('as' => 'signup', 'uses' => 'AuthController@trySignUp'));
});

/*
|--------------------------------------------------------------------------
| All routes in this group require a signed in user
|--------------------------------------------------------------------------
 */
Route::group(array('before' => 'auth'), function () {
	Route::get('dashboard', 'DashboardController@showDashboard');
	Route::get('user/settings', 'UserController@showSettings');
});

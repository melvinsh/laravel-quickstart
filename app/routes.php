<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
 */

Route::get('/', 'HomeController@showHomepage');

Route::get('login', array('as' => 'get_login', 'uses' => 'AuthController@showLogin'));
Route::get('logout', array('as' => 'get_logout', 'uses' => 'AuthController@logout'));
Route::get('signup', array('as' => 'get_signup', 'uses' => 'AuthController@showSignUp'));

Route::group(array('before' => 'csrf'), function () {
	Route::post('login', array('as' => 'post_login', 'uses' => 'AuthController@tryLogin'));
	Route::post('signup', array('as' => 'post_signup', 'uses' => 'AuthController@trySignUp'));
});

/*
|--------------------------------------------------------------------------
| All routes in this group require a signed in user
|--------------------------------------------------------------------------
 */
Route::group(array('before' => 'auth'), function () {
	Route::get('dashboard', array('as' => 'get_dashboard', 'uses' => 'DashboardController@showDashboard'));
	Route::get('user/settings', array('as' => 'get_settings', 'uses' => 'UserController@showSettings'));
});

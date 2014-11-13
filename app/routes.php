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

/**
 * Home page.
 * If signed in -> dashboard.
 * If not signed in -> login.
 */
Route::get('/', function () {
	if (Auth::check()) {
		return Redirect::to('dashboard');
	}

	return Redirect::to('login');
});

/**
 * Login screen.
 * If signed in -> dashboard.
 * If not signed in -> render login page.
 */
Route::get('login', function () {
	if (Auth::check()) {
		return Redirect::to('dashboard');
	}

	return View::make('pages.auth.login');
});

/**
 * Post to login screen.
 * On success -> dashboard.
 * On fail -> login.
 */
Route::post('login', function () {
	if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
		return Redirect::intended('dashboard');
	}

	return Redirect::to('login')->with('error', 'Unknown username/password combination.');;
});

/**
 * Sign out.
 * Redirect to login.
 */
Route::get('logout', function () {
	Auth::logout();
	return Redirect::to('login');
});

/**
 * All routes in this group require authorization.
 */
Route::group(array('before' => 'auth'), function () {
	Route::get('dashboard', 'DashboardController@showDashboard');
});

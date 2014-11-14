<?php

class AuthController extends BaseController {

	/**
	 * Show the login screen to the user.
	 */
	public function showLogin() {
		if (Auth::check()) {
			return Redirect::to('dashboard');
		}

		return View::make('pages.auth.login');
	}

	/**
	 * Try to log the user in using email and password.
	 * On success: redirect to dashboard with welcome message.
	 * On error: redirect to login with error message,
	 */
	public function tryLogin() {

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
			return Redirect::intended('dashboard')->with('message', 'Welcome back!');;
		}

		return Redirect::to('login')->with('error', 'Unknown username/password combination.');

	}

	/**
	 * Logout user and redirect to login screen.
	 */
	public function logout() {
		Auth::logout();
		return Redirect::to('login');
	}

	/**
	 * Show signup screen.
	 * Redirect to dashboard if a user is signed in.
	 */
	public function showSignUp() {
		if (Auth::check()) {
			return Redirect::to('dashboard');
		}

		return View::make('pages.auth.signup');
	}

	/**
	 * Try to sign up a user.
	 * Validates email and password fields.
	 * On success: redirect to dashboard with welcome message.
	 */
	public function trySignUp() {

		$rules = array(
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8|confirmed',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('signup')
			->withErrors($validator)
			->withInput(Input::except(array('password', 'password_confirm')));;
		}

		$user = User::create(array(
			'email' => Input::get('email'),
			'password' => Hash::make(Input::get('password'))
		));

		$user->save();

		Auth::login($user);

		return Redirect::to('dashboard')
			->with('message', 'Welcome to Laravel Quickstart!');

	}

}

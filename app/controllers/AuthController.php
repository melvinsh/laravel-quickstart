<?php

class AuthController extends BaseController {

	/**
	 * [showLogin description]
	 * @return [type] [description]
	 */
	public function showLogin() {
		if (Auth::check()) {
			return Redirect::to('dashboard');
		}

		return View::make('pages.auth.login');
	}

	/**
	 * [tryLogin description]
	 * @return [type] [description]
	 */
	public function tryLogin() {

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
			return Redirect::intended('dashboard')->with('message', 'Welcome back!');;
		}

		return Redirect::to('login')->with('error', 'Unknown username/password combination.');

	}

	/**
	 * [logout description]
	 * @return [type] [description]
	 */
	public function logout() {
		Auth::logout();
		return Redirect::to('login');
	}

	/**
	 * [showSignUp description]
	 * @return [type] [description]
	 */
	public function showSignUp() {
		if (Auth::check()) {
			return Redirect::to('dashboard');
		}

		return View::make('pages.auth.signup');
	}

	/**
	 * [trySignUp description]
	 * @return [type] [description]
	 */
	public function trySignUp() {

		$rules = array(
			'email' => 'required|email|unique:users',
			'password' => 'required|min:8|confirmed',
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator                ->fails()) {
			return Redirect::to('signup')->withErrors($validator)->withInput(Input::except('password'));;
		}

		$user = User::create(array(
			'email' => Input::get('email'),
			'password' => Hash::make(Input::get('password'))
		));

		Auth::login($user);

		return Redirect::to('dashboard')->with('message', 'Welcome to Laravel Quickstart!');

	}

}

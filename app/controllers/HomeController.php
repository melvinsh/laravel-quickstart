<?php

class HomeController extends BaseController {

	/**
	 * Show us the homepage.
	 * Or, if someone is logged in, redirect to dashboard.
	 */
	public function showHomepage() {
		if (Auth::check()) {
			return Redirect::to('dashboard');
		}

		return Redirect::to('login');
	}

}

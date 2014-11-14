<?php

class HomeController extends BaseController {

	/**
	 * Show us the homepage.
	 */
	public function showHomepage() {
		if (Auth::check()) {
			return Redirect::to('dashboard');
		}

		return Redirect::to('login');
	}

}

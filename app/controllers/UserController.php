<?php

class UserController extends BaseController {

	/**
	 * Show us the dashboard.
	 */
	public function showSettings() {
		return View::make('pages.user.settings');
	}

}

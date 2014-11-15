<?php

class DashboardController extends BaseController
{

    /**
     * Show us the dashboard.
     */
    public function showDashboard()
    {
        return View::make('pages.dashboard');
    }

}

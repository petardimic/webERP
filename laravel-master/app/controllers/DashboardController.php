<?php

/**
*
*/

class DashboardController extends BaseController
{
	function getDashboard($systemID='')
	{
		return View::make('user.dashboard');
	}
}

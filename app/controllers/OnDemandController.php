<?php

class OnDemandController extends BaseController {

	/**
	 * Display the search and social logins
	 *
	 * @return View
	 */
	public function index()
	{
		return View::make('site.onePage');
	}

	

}
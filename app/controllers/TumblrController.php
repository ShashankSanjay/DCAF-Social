<?php

class TumblrController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function login()
	{
		$c = Config::get('tumblr.tumblr');
		$client = new Tumblr($c['consumer_key'], $c['consumer_secret']);
		$client->setToken($c['token'], $c['token_secret']);
		$userInfo = $client->getUserInfo();
		var_dump($userInfo);
	}

}
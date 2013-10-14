<?php

class TwitterController extends \BaseController {

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
		$twitter = new Twitter();
		$c = Config::get('twitter.twitter');
		$twitter->oAuth($c['consumer_key'], $c['consumer_secret'], $c['oauth_token'], $c['oauth_token_secret']);
		

		$token = $twitter->getRequestToken($c['callback']);
		$twitter->getAuthorizeUrl($token);
		$twitter->getAccessToken();

		try {
			$statuses = $twitter->call('statuses/home_timeline');
			foreach ($statuses as $status) {
				echo $status['user']['name'].': '.$status['text'].PHP_EOL;
			}
		} catch (Exception $e) {
			return $e;
		}
	}

}

?>
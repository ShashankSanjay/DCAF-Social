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
		/*$twitter->oAuth($c['consumer_key'], $c['consumer_secret'], $c['oauth_token'], $c['oauth_token_secret']);
		$statuses = $twitter->call('statuses/home_timeline');
		foreach ($statuses as $status) {
			echo $status['user']['name'].': '.$status['text'].PHP_EOL;
		}*/
		$url = 'https://api.twitter.com/oauth/request_token'.(URL::current());
		$req = array(
			'http' => array(
				'header' => $url,
				'method' => 'POST',
				)
			);

		try {
			$context = stream_context_create($req);
			$result = file_get_contents($url, false, $context);
			var_dump($result);
		} catch (HttpException $e) {
			return $e;
		}
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
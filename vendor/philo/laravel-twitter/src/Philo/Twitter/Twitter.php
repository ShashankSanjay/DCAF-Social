<?php namespace Philo\Twitter;

use Config;

class Twitter extends \TijsVerkoyen\Twitter\Twitter{

	/**
	 * Default constructor
	 *
	 * @param string $consumerKey    The consumer key to use.
	 * @param string $consumerSecret The consumer secret to use.
	 */
	public function __construct()
	{
		$c = Config::get('twitter.twitter');
	    $this->setConsumerKey($c['consumer_key']);
	    $this->setConsumerSecret($c['consumer_secret']);
	}

}

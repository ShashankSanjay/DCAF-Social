<?php

/**
 * Social Retriever Controller
 * 
 * @version	1.0
 */
class SocialRetrieverController extends BaseController
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	public $consumer;	// OAuth::Consumer instance
	public $pages;
	
	/**
	 * Pass each call a OAuth::Consumer object
	 */
	public function __construct()
	{
		// {implementation code}
	}
	
	public function getIndex()
	{
		// {implementation code}
	}
	
	/**
	 * Cron job function to be called
	 */
	public function getAllUserData()
	{
		$facebookRetriever	 = new FacebookRetriever();
		$TwitterRetriever	 = new TwitterRetriever();
		$googlePlusRetriever = new GooglePlusRetriever();
		$tumblerRetriever	 = new TumblerRetriever();
		
		/*
		$facebookJobs	= array();
		$twitterJobs	= array();
		$googlePlusJobs	= array();
		$tumblerJobs	= array();
		*/
		
		$networkTokens	= array(
			'oauth_facebook'=> array(),
			'oauth_twitter'	=> array(),
			'oauth_google'	=> array(),
			'oauth_tumbler'	=> array(),
		);
		
		// get all pending jobs
		$jobs = Job::all()->all();
		
		echo '<pre>';
		var_dump($jobs);
		die('</pre>');
		
		for ($j=0,$n=count($jobs); $j<$n; $j++)
		// for ($j=0; ($job = $jobs[$j]); $j++)
		{
			// process each job: $jobs[$j]
			
			$job = $jobs[$j];
			$networkTokens[$job->type][] = DB::table($job->type)->find($job->data);
			
			/*
			switch ($job->type)
			{
				case 'oauth_facebook':
					$facebookJobs[] = $job;
					break;
				case 'oauth_twitter':
					$twitterJobs[] = $job;
					break;
				case 'oauth_google':
					$googlePlusJobs[] = $job;
					break;
				case 'oauth_tumbler':
					$tumblerJobs[] = $job;
					break;
				default:
			}
			*/
		}
		
		// Call FacebookRetriver to retrieve Facebook data
		/* for ($facebookJobs as &$job) {
			$oauth = DB::table('oauth_facebook')->where('name', 'John')->first();
		} */
		
		for ($networkTokens['oauth_facebook'] as $token)
		{
			$facebookRetriever->getAllUserData($token);
		}
		
		// Call SocialRetriver to retrieve Google Plus data
		
		// Call SocialRetriver model to retrieve Twitter data
		
		// Call SocialRetriver model to retrieve Instagram/Tumblr data
	}
}

?>
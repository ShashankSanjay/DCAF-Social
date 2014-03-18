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
		/*
		$facebook = OAuth::consumer('facebook');
		$twitter  = OAuth::consumer('twitter');
		$google   = OAuth::consumer('google');
		$tumbler  = OAuth::consumer('tumbler');
		*/
		
		$facebookRetriever	 = new FacebookRetriever();
		$TwitterRetriever	 = new TwitterRetriever();
		$googlePlusRetriever = new GooglePlusRetriever();
		$tumblerRetriever	 = new TumblerRetriever();
		
		$networkTokens	= array();
		
		// get all pending jobs
		$jobs = Job::all()->all();
		
		/*
		echo '<pre>$jobs:'."\n";
		print_r($jobs);
		die('</pre>');
		*/
		
		for ($j=0,$n=count($jobs); $j<$n; $j++)
		// for ($j=0; ($job = $jobs[$j]); $j++)
		{
			// process each job
			
			$job = $jobs[$j];
			$token = DB::table($job->data->table)->find($job->data->id);
			if ($token) {
				$networkTokens[$job->data->table][] = $token->access_token;
			} else {
				Log::warning('unknown token for job "'.$job->name.'" (id: '.$job->id.')');
				echo 'unknown token for job "'.$job->name.'" (id: '.$job->id.')';
			}
		}
		
		echo '<pre>';
		var_dump($networkTokens);
		die('</pre>');
		
		// Call FacebookRetriver to retrieve Facebook data
		/* for ($facebookJobs as &$job) {
			$oauth = DB::table('oauth_facebook')->where('name', 'John')->first();
		} */
		
		foreach ($networkTokens['oauth_facebook'] as $token)
		{
			echo '$token: '.$token."\n";
			$facebookRetriever->getAllUserData($token);
		}
		
		// Call SocialRetriver to retrieve Google Plus data
		
		// Call SocialRetriver model to retrieve Twitter data
		
		// Call SocialRetriver model to retrieve Instagram/Tumblr data
	}
}

?>
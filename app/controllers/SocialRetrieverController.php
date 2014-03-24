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
		
		// $networkTokens	= array();
		$networkUsers	= array();
		
		// get all pending jobs
		// $jobs = Job::all()->all();
		
		// get all pending SocialRetriever jobs
		$jobs = Job::where('type','SocialRetriever')->get()->all();
		
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
			// SO Q&A #2201335
			$networkUser = ${!${''} = $job->data->type}::find($job->data->uid);
			//var_dump($job);
			//die();
			// $networkUser = DB::table($job->data->table)->find($job->data->uid);
			$token = DB::table('oauth_'.$job->data->network)->find($job->data->oauth_id);
			if ($token) {
				$networkUser->access_token = $token->access_token;
				$networkUsers[$job->data->network][] = $networkUser;
			} else {
				Log::warning('unknown token for job "'.$job->name.'" (id: '.$job->id.')');
				echo 'unknown token for job "'.$job->name.'" (id: '.$job->id.')';
			}
		}

		// Call FacebookRetriver to retrieve Facebook data
		/* for ($facebookJobs as &$job) {
			$oauth = DB::table('oauth_facebook')->where('name', 'John')->first();
		} */
		$network = 'facebook';
		
		$dcaf_message = array();
		foreach ($networkUsers[$network] as $networkUser)
		{
			//echo '$token: '.$networkUser->access_token."\n";
			$facebookRetriever->getAllUserData($networkUser);

			// By now, user is saved into db, and so have pages + basic info on them
			//	So next, get page likes and posts
			
			foreach ($networkUser->FacebookPage()->get() as $key => $page) {
				//echo $page->name;
				$facebookRetriever->getPage($page, $networkUser);
				$dcaf_message[] = 'Page ' . $page->name . ' retrieved.';
			}		
		}
		
		Mail::later(5, 'emails.dcaf.retriever.pagesRetrieved', array('dcaf_message' => $dcaf_message), function($message)
		{
			$message->to('ssanja1@pride.hofstra.edu', 'Admin')->subject('Page has finished retrieval');
		});
		

		// Call SocialRetriver to retrieve Google Plus data
		
		// Call SocialRetriver model to retrieve Twitter data
		
		// Call SocialRetriver model to retrieve Instagram/Tumblr data
	}
}

?>
<?php

/**
 * Social Retriever Controller
 * 
 * @version	1.0
 */
class SocialRetrieverController extends BaseController
{
	public static $debug;
	
	/**********************
	 * Instance Variables *
	 **********************/
	
	public $consumer;	// OAuth::Consumer instance
	public $pages;
	
	/**
	 * Initializes static class variables
	 * SO Q&A #693691
	 */
	static function init()
	{
		// /vendor/laravel/framework/src/Illuminate/Config/Repository.php
		self::$debug = Config::get('app.debug');
	}
	
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
	 * 
	 * processes SocialRetriever jobs in the job queue
	 */
	public function getAllUserData()
	{
		/*
		$facebook = OAuth::consumer('facebook');
		$twitter  = OAuth::consumer('twitter');
		$google   = OAuth::consumer('google');
		$tumbler  = OAuth::consumer('tumbler');
		*/
		
		$retrievers = array(
			'facebook'	=> new FacebookRetriever(),
			'twitter'	=> new TwitterRetriever(),
			'google'	=> new GooglePlusRetriever(),
			'tumbler'	=> new TumblerRetriever()
		);
		
		// $networkTokens	= array();
		$networkUsers	= array();
		
		// get all pending jobs
		// $jobs = Job::all()->all();
		
		// get all pending SocialRetriever jobs
		$jobs = Job::where('type','SocialRetriever')->get()->all();
		
		if (self::$debug) echo '<pre>'.count($jobs).' pending jobs</pre>';
		
		/*
		echo '<pre>$jobs:'."\n";
		print_r($jobs);
		die('</pre>');
		*/
		
		for ($j=1,$n=count($jobs); $j<$n; $j++)
		// for ($j=0; ($job = $jobs[$j]); $j++)
		{
			// process each job
			$job = $jobs[$j];
			
			if (self::$debug) echo '<pre>processing job #'.$j.': "'.$job->name.'" (id: '.$job->id.')</pre>';
			
			// SO Q&A #2201335
			$networkUser = ${!${''} = $job->data->type}::find($job->data->uid);
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
			$retriever = $retrievers[$network];
			
			if (self::$debug)
			{
				echo '<pre>retrieving user data for:'
					."\n[".get_class($networkUser)."]\n{\n"
					."\tFB_User_ID: ".$networkUser->FB_User_ID.",\n"
					."\tusername: \"".$networkUser->username."\",\n"
					."\tname: \"".$networkUser->name."\",\n"
					."\tfirst_name: \"".$networkUser->first_name."\",\n"
					."\tlast_name: \"".$networkUser->last_name."\",\n"
					."\tgender: \"".$networkUser->gender."\",\n"
					."\temail: \"".$networkUser->email."\",\n"
					."\taccess_token: \"".$networkUser->access_token."\"\n"
					."}</pre>";
			}
			
			$retriever->getAllUserData($networkUser);

			// By now, user is saved into db, and so have pages + basic info on them
			//	So next, get page likes and posts
			
			if (self::$debug)
			{
				echo '<pre>retrieving likes and posts for:'
					."\n[".get_class($networkUser)."]\n{\n"
					."\tFB_User_ID: ".$networkUser->FB_User_ID.",\n"
					."\tusername: \"".$networkUser->username."\",\n"
					."\t...\n"
					."}</pre>";
			}
			
			foreach ($networkUser->FacebookPage()->get() as $key => $page)
			{
				if (self::$debug)
				{
					echo '<pre>retrieving page:'
						."\n[".get_class($page)."]\n{\n"
						."\tFB_Page_ID: ".$page->FB_Page_ID.",\n"
						."\tname: \"".$page->name."\"\n"
						."}</pre>";
				}
				
				$retriever->getPage($page, $networkUser);
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
SocialRetrieverController::init();

?>
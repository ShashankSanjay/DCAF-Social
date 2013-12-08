<?php

class Login extends BaseController {
	
	private $provider_domains = array(
		'facebook.com' => ''
	);
	
	public function login()
	{
		// temporary
		$provider = 'facebook';
		
		$redirect_url = $_SERVER['HTTP_REFERER'];
		
		// now get the domain name from the full URL
		
		
		
		$token = Session::get('lusitanian_oath_token');
		
		$provider_c = $provider;
		$provider_c{0} = strtoupper($provider{0});
		
		// if not logged in
		if (!isset($token[$provider_c])) {
			// redirect user
		}
		
		$consumers = array();
		
		$consumers[$provider] = OAuth::consumer($provider);
		
		$retriever = new SocialRetriever($consumer);
		
		// once logged in, redirect the
		// user back to their dashboard
	}

}

?>
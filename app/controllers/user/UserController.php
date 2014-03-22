<?php

/*
use Models\DCAF_User;
use Models\NetworkUser;
use Models\UserProfile;
use Models\UserInterface;
*/
use OAuth\OAuth2\Token\StdOAuth2Token;

/* spl_autoload_register(function ($class) {
	die('cannot find class: '.$class);
	$parts = explode();
	// include 'classes/' . $class . '.class.php';
}, true, true); */

class UserController extends BaseController
{
	/**
	 * User Model
	 * @var DcafUser
	 */
	protected $user;
	
	/**
	 * Instantiates UserController and stores
	 * a reference to the instance of DcafUser.
	 * 
	 * @param DcafUser $user
	 */
	public function __construct(DcafUser $user = null)
	{
		parent::__construct();
		$this->user = $user; // ?: Auth::User();
	}
	
	/**
	 * User Dashboard: Main page
	 * 
	 * requires an authenticated user
	 * 
	 * HTTP Request Method:	GET
	 * Route URL:	/user/
	 * 
	 * @return View
	 */
	public function getIndex()
	{
		list($user,$redirect) = $this->user->checkAuthAndRedirect('user');
		if ($redirect) { return $redirect; }
		
		// Show the page
		$companies = [
			'Pepsi' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'],
			'Coke' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'],
			'Samsung' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'],
			'Apple' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'],
			'Levi' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'],
			'American Apparel' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'],
			/* 'Likeable Media' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'],
			'CPX' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'],
			'Hofstra' => ['0' => 'fa fa-facebook-square',
						'1' => 'fa fa-twitter-square',
						'2' => 'fa fa-google-plus-square',
						'3' => 'fa fa-instagram'] */
		];
		
			
		/* $brand = new Brand();
		$brand->id = 1;
		$brand->name = 'Cherry Coke';
		$brand->save();
		
		$bg = BrandGroup::find(1);
		$brand = Brand::find(1);
		$brand->BrandGroup()->associate($bg);

		var_dump($brand->BrandGroup()->first()->name);
		die();
		// $brand = Brand::find(1);
    	// $uid = $brand->facebook->oauth_uid; */
    	
    	// (new Facebook\phpSDK\FacebookServiceProvider(App::make('app')))->register();
    	
    	// echo '<pre>';
    	
    	/* $call = $consumer->request('/me/accounts');
		$response = json_decode($call, true);

		$data = $response['data'];

		foreach ($data as $page) {
			# code...
			//$page['access_token'];
			//$page['id'];
			$consumer->setToken($page['access_token']);
			$c = $consumer->request('/me');
			$r = json_decode($c, true);
			var_dump($r);
		} */
		
    	// die('</pre>');
    	
    	// $facebook = App::make('facebook');
    	// $facebook = $app->make('Facebook');
    	/* $facebook = new Facebook(array(
			'appId'  => '344617158898614',
			'secret' => '6dc8ac871858b34798bc2488200e503d'
	    )); */
    	// App::instance('facebook', $facebook);
		
		// return View::make('site.outlines.dashboard', compact('companies'));
		return View::make('site/dashboard/home', array($user, $companies));
	}

	/**
	 * Stores new user
	 * 
	 * HTTP Method:	POST
	 * Route URL:	/user/
	 */
	public function postIndex()
	{
		$this->user->username = Input::get('username');
		$this->user->email = Input::get('email');

		$password = Input::get('password');
		$passwordConfirmation = Input::get('password_confirmation');
		
		if (!empty($password)) {
			if($password === $passwordConfirmation) {
				$this->user->password = $password;
				// The password confirmation will be removed from model
				// before saving. This field will be used in Ardent's
				// auto validation.
				$this->user->password_confirmation = $passwordConfirmation;
			} else {
				// Redirect to the new user page
				return Redirect::to('user/create')
					->withInput(Input::except('password','password_confirmation'))
					->with('error', Lang::get('admin/users/messages.password_does_not_match'));
			}
		} else {
			unset($this->user->password);
			unset($this->user->password_confirmation);
		}
		
		// Save if valid. Password field will be hashed before save
		$this->user->save();
		
		if ($this->user->id)
		{
			/*
			$company = new ClientCompany();
			$company->name = 'Test';
			$company->industry = 'Test Industry';
			$company->billing_account = $billing;
			$company->save();
			
			$company->employees()->attach($user);
			var_dump($company->employees->toArray());
			*/
			
			// Redirect with success message, You may replace "Lang::get(..." for your custom message.
			return Redirect::to('user/confirmation')
				->with('notice', Lang::get('user/user.user_account_created'));
		}
		else
		{
			// Get validation errors (see Ardent package)
			$error = $this->user->errors()->all();
			
			return Redirect::to('user/create')
				->withInput(Input::except('password'))
				->with('error', $error);
		}
	}

	/**
	 * Edits a user
	 * 
	 * HTTP Method:	POST
	 * Route URL:	/user/{user}/edit
	 */
	public function postEdit($user)
	{
		// Validate the inputs
		$validator = Validator::make(Input::all(), $user->getUpdateRules());
		
		if ($validator->passes())
		{
			$oldUser = clone $user;
			$user->username = Input::get('username');
			$user->email = Input::get('email');

			$password = Input::get('password');
			$passwordConfirmation = Input::get('password_confirmation');

			if (!empty($password)) {
				if ($password === $passwordConfirmation) {
					$user->password = $password;
					// The password confirmation will be removed from model
					// before saving. This field will be used in Ardent's
					// auto validation.
					$user->password_confirmation = $passwordConfirmation;
				} else {
					// Redirect to the new user page
					return Redirect::to('users')->with('error', Lang::get('admin/users/messages.password_does_not_match'));
				}
			} else {
				unset($user->password);
				unset($user->password_confirmation);
			}

			$user->prepareRules($oldUser, $user);

			// Save if valid. Password field will be hashed before save
			$user->amend();
		}

		// Get validation errors (see Ardent package)
		$error = $user->errors()->all();

		if (empty($error)) {
			return Redirect::to('user')
				->with('success', Lang::get('user/user.user_account_updated'));
		} else {
			return Redirect::to('user')
				->withInput(Input::except('password','password_confirmation'))
				->with('error', $error);
		}
	}

	/**
	 * Displays the form for user creation
	 * 
	 * HTTP Method:	GET
	 * Route URL:	/user/create
	 */
	public function getCreate()
	{
		return View::make('site/nonboard/create');
	}
	
	/**
	 * Displays the login form
	 * 
	 * HTTP Method:	GET
	 * Route URL:	/user/login
	 */
	public function getLogin()
	{
		$user = Auth::user();
		if (!empty($user->id)) {
			return Redirect::to('/');
		}
		return View::make('site/nonboard/login');
	}

	/**
	 * Attempt to do login
	 * 
	 * HTTP Method:	POST
	 * Route URL:	/user/login
	 */
	public function postLogin()
	{
		$input = array(
			'email'    => Input::get('email'), // May be the username too
			'username' => Input::get('email'), // May be the username too
			'password' => Input::get('password'),
			'remember' => Input::get('remember'),
		);
		
		// If you wish to only allow login from confirmed users, call logAttempt
		// with the second parameter as true.
		// logAttempt will check if the 'email' perhaps is the username.
		// Check that the user is confirmed.
		
		if (Confide::logAttempt($input, true))
		{
			$r = Session::get('loginRedirect');
			
			if (!empty($r))
			{
				Session::forget('loginRedirect');
				return Redirect::to($r);
			}
			
			return Redirect::to('/');
		}
		else
		{
			// Check if there was too many login attempts
			if (Confide::isThrottled($input)) {
				$err_msg = Lang::get('confide::confide.alerts.too_many_attempts');
			} else if ($this->user->checkUserExists($input) && !$this->user->isConfirmed($input)) {
				$err_msg = Lang::get('confide::confide.alerts.not_confirmed');
			} else {
				$err_msg = Lang::get('confide::confide.alerts.wrong_credentials');
			}
			
			return Redirect::to('user/login')
				->withInput(Input::except('password'))
				->with('error', $err_msg);
		}
	}

	/**
	 * Attempt to confirm account with code
	 * 
	 * HTTP Method:	GET
	 * Route URL:	/user/confirm
	 * 
	 * @param  string  $code
	 */
	public function getConfirm($code)
	{
		if (Confide::confirm($code))
		{
			return Redirect::to('user/firstTime')
				->with('notice', Lang::get('confide::confide.alerts.confirmation'));
		}
		else
		{
			return Redirect::to('user/login')
				->with('error', Lang::get('confide::confide.alerts.wrong_confirmation'));
		}
	}

	/**
	 * Displays the forgot password form
	 * 
	 * HTTP Method:	GET
	 * Route URL:	/user/forgot
	 */
	public function getForgot()
	{
		return View::make('site/nonboard/forgot');
	}

	/**
	 * Attempt to reset password with given email
	 * 
	 * HTTP Method:	POST
	 * Route URL:	/user/forgot
	 */
	public function postForgot()
	{
		if (Confide::forgotPassword(Input::get('email')))
		{
			return Redirect::to('user/login')
				->with('notice', Lang::get('confide::confide.alerts.password_forgot'));
		}
		else
		{
			return Redirect::to('user/forgot')
				->withInput()
				->with('error', Lang::get('confide::confide.alerts.wrong_password_forgot'));
		}
	}

	/**
	 * Shows the change password form with the given token
	 * 
	 * HTTP Method:	GET
	 * Route URL:	/user/reset/{token}
	 */
	public function getReset($token)
	{
		return View::make('site/user/reset')
			->with('token',$token);
	}


	/**
	 * Attempt change the password of the user.
	 * 
	 * HTTP Method:	POST
	 * Route URL:	/user/reset/{token}
	 */
	public function postReset()
	{
		$input = array(
			'token'=>Input::get('token'),
			'password'=>Input::get('password'),
			'password_confirmation'=>Input::get('password_confirmation'),
		);

		// By passing an array with the token, password and confirmation
		if (Confide::resetPassword($input))
		{
			return Redirect::to('user/login')
			->with('notice', Lang::get('confide::confide.alerts.password_reset'));
		}
		else
		{
			return Redirect::to('user/reset/'.$input['token'])
				->withInput()
				->with('error', Lang::get('confide::confide.alerts.wrong_password_reset'));
		}
	}

	/**
	 * Log the user out of the application.
	 */
	public function getLogout()
	{
		Confide::logout();

		return Redirect::to('/');
	}
	
	/**
	 * Process a dumb redirect.
	 * 
	 * @param $url1
	 * @param $url2
	 * @param $url3
	 * @return string
	 */
	public function processRedirect($url1, $url2, $url3)
	{
		$redirect = '';
		if (!empty($url1))
		{
			$redirect = $url1;
			$redirect .= (empty($url2)? '' : '/' . $url2);
			$redirect .= (empty($url3)? '' : '/' . $url3);
		}
		return $redirect;
	}
	
	/**
	 * Attempt to change the password of the user.
	 * 
	 * HTTP Method:	GET
	 * Route URL:	/user/confirmation
	 */
	public function getConfirmation()
	{
		return View::make('site.nonboard.confirmation');
	}
	
	/**
	 * Display Network Registration Page
	 * 
	 * HTTP Method:	GET
	 * Route URL:	/user/registernetworks
	 */
	public function registerNetworks()
	{
		$this->user = Auth::user();
		
		/*
		use data to show which networks are registered and which are not
		$data = array();

		$user = Auth::user();
		*/

		// return View::make('site.nonboard.registernetworks')->with($data);

		/* if (OAuth::hasToken('facebook')) {
			//
			$facebook = OAuth::consumer('facebook');
			$response = $facebook->request('/me/accounts');
			$yo = json_decode($response);
			print_r($yo);
		}
		else {
			// Save into db
		} */
		
		// Session::flash('lusitanian_oauth_token', null);
		
		$networks = array(
			'facebook'	=> array('abbr' => 'FB', 'accountEndpoint' => '/me'),
			'twitter'	=> array('abbr' => 'TW', 'accountEndpoint' => 'account/settings.json'),
			'google'	=> array('abbr' => 'GP', 'accountEndpoint' => ''),
			'instagram'	=> array('abbr' => 'IG', 'accountEndpoint' => '')
		);

		foreach ($networks as $network => $props)
		{
			$db = 'oauth_'.$network;
			
			if (OAuth::hasToken($network))
			{
				$token = OAuth::token($network);
				
				// now that we have the access token, we need to make an API request
				// to determine if we already have this user in our database
				$consumer = OAuth::consumer($network);
				$consumer->getStorage()->storeAccessToken(ucfirst($network), $token);
				$response = $consumer->request($props['accountEndpoint']);
				$response = json_decode($response, true);
				
				$networkUser = ucfirst($network).'User';

				// if we don't already have this network account in the database
				if ($networkUser::find($response['id']) == null)
				{
					// SO Q&A #2201335
					// $networkUser = new ${!${''} = ucfirst($network).'User'}();
					
					$networkUser = new $networkUser;
					
					$networkUser->{$networkUser->getKeyName()} = $response['id'];
					foreach ($response as $key => $val) {
						$networkUser->{$key} = $val;
					}

					/*
					echo '<pre>';
					echo '$response:'."\n";
					print_r($response);
					echo '$networkUser:'."\n";
					print_r($networkUser);
					die('</pre>');
					*/
					
					$networkUser->save();
					
					// if we don't already have an access token for this DCAF user on this network stored in the database
					if (is_null($oauth = DB::table($db)->where('user_id', $this->user->id)->first()))
					// if (count(DB::select('select * from '.$db.' where access_token = ?', array($token->getAccessToken()))) == 0)
					{
						// Save the token into db
						$oauthId = DB::table($db)->insertGetId(array('user_id' => $this->user->id, 'access_token' => $token->getAccessToken(), 'expire_time' => $token->getEndOfLife()));
					}
					
					// create a new data scraping job
					$job = new Job();
					$job->name = $props['abbr'].'J'.$response['id'];
					$job->data = array(
						'uid' => $response['id'],
						'type' => get_class($networkUser),
						'network' => $network,
						'table' => $networkUser->getTable(),
						'oauth_id' => $oauth ? $oauth->id : $oauthId
					);
					$job->type = 'SocialRetriever';
					
					/*
					echo '<pre>';
					echo '$job:'."\n";
					print_r($job);
					die('</pre>');
					*/
					
					$job->save();
				}
			}
		}
		
		return View::make('site.nonboard.registernetworks');
	}
	
	public function postNetworks()
	{
		// {implementation code}
	}
	
	public function firstTime()
	{
		$user = Auth::User();
		
		// first user from a company or agency
		if ($first)
		{
			// Do all first time initializations. 

			// New Company
			// $companyName = Input::get('companyName');
			$company = new ClientCompany;
			$company->name = Input::get('companyName');
			$company->industry = Input::get('industry');
			$company->save();
			// Attach company to user
			$company->employees()->attach($user);

			// Make new BillingAccount
			$billing = new BillingAccount;
			$billing->billing_name = Input::get('billingName');
			$billing->billing_address = Input::get('billingAddress');
			// Make user billing contact

			// Make new team, make user manager
		}
		else	// Not the first user from their company
		{
			// get access code for company
			$access = Input::get('accessCode');

			if (true) {
				// plug user into existing things
			}
			else {
				// access code is incorrect as it does not exist
			}
		}
	}
	
	public function team()
	{
		return View::make('site.nonboard.team');
	}	
}

?>
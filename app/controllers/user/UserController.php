<?php

/*
use Models\DCAF_User;
use Models\NetworkUser;
use Models\UserProfile;
use Models\UserInterface;
*/

/* spl_autoload_register(function ($class) {
	die('cannot find class: '.$class);
	$parts = explode();
	// include 'classes/' . $class . '.class.php';
}, true, true); */

class UserController extends BaseController {
	
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
	public function __construct(DcafUser $user)
	{
		parent::__construct();
		$this->user = $user;
	}
	
	/**
	 * Users settings page
	 *
	 * @return View
	 */
	public function getIndex()
	{
		list($user,$redirect) = $this->user->checkAuthAndRedirect('user');
		if($redirect){return $redirect;}
		
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
			/*'Likeable Media' => ['0' => 'fa fa-facebook-square',
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
						'3' => 'fa fa-instagram']*/
		];
		
		// $user = User::find($user->uid);
		echo '<pre>';

		// Make new BillingPlan
		/*$bplan = new BillingPlan;
		$bplan->plan_name = 'Small-DCAF';
		$bplan->payment_amount = '500.00';
		$bplan->payment_frequency = '6';
		$bplan->description = 'heyo its the small plan';
		$bplan->save();*/
		//$bplan = BillingPlan::find(14);

		/*$company = new ClientCompany();
		$company->name = 'Test';
		$company->industry = 'Test Industry';
		$company->save();*/
		//$company = ClientCompany::find(1);
		
		//$company->employees()->attach($user);

		// Make new BillingAccount
		/*$billing = new BillingAccount;
		$billing->billing_name = 'Some Guy';
		$billing->billing_address = '395 Some Guy St, Hempstead, 95505, NY';
		$billing->save();*/
		//$billing = BillingAccount::find(15);
		// Associate a billing plan to billing account
		//$billing->billingPlan()->associate($bplan);

		// Make user billing contact
		//$billing->billingContact()->associate($user); //doesn't work
		/*$user->billingContact()->associate($billing);
		$user->save();
		$user = Auth::User();
		var_dump($user->billingContact->billing_address);*/ //works
		//var_dump($billing->billingContact()->get());	// doesn't work
		// Attach billing plan to company
		//$billing->clientCompany()->associate($company); 
		//$company->billingAccount()->associate($billing);
		//$company->save();
		//$company->save();
		//$billing->save();
		/*var_dump($billing->billingPlan()->get());	// works!
		var_dump($user->billingContact()->first());	// works!
		var_dump($billing->clientCompany()->get());*/	// works!
		//var_dump($billing->billingPlan->plan_name);

		// check if role already exists
		/*if (false) {
			$successful = true;
		} else {
			$r = new DcafRole();
			$r->role_name = 'cr';
			$successful = $r->save();
		}
		
		$manageUsers = new Permission();
		$manageUsers->name = 'cp';
		$manageUsers->display_name = 'cp';
		$manageUsers->save();
		
		//$r->perms()->attach($manageUsers); //works
		
		$r->perms()->sync(array($manageUsers->id));	//works
		
		echo "success: ";		
		var_dump($successful);
		if ($successful) {
			$user->attachRole($r);
		}
		echo "hasrole then can";
		var_dump($user->hasRole("cr"));	//can't use hasRole. DcafRole object is structured differently from zizaco/role so to use, this would involve changes to Entrust/HasRole
		var_dump($user->can("cp"));		//works, by using perms()->attach, can() finds the right relation

		//var_dump($user->perms->toArray());*/
		die();
		
		// var_dump($user = DcafUser::where('username','=','user')->first());
		// var_dump($user->networkUsers()->first()->userProfile);	// NULL
		// var_dump($user->networkUsers[0]->userProfile);			// NULL
		
		// var_dump($user->networkUsers[0]->toArray());     // works!
		// var_dump($user->employers->toArray());           // works!
		
		// $employers = $user::with('employers')->find($user->id);	// works!
		// $employers = DcafUser::with('employers')->get();			// works!
		
		// var_dump($user->billingContact);
		
		// var_dump($user->employers->toArray());
		
		/*$company = new ClientCompany();
		$company->name = 'Test';
		$company->industry = 'Test Industry';
		$company->save();
		
		$company->employees()->attach($user);
		var_dump($company->employees->toArray());*/
		
		echo '</pre>';
		die();
		
		return View::make('site/dashboard/home', compact('user', 'companies'));
	}

	/**
	 * Stores new user
	 */
	public function postIndex()
	{
		$this->user->username = Input::get( 'username' );
		$this->user->email = Input::get( 'email' );

		$password = Input::get('password');
		$passwordConfirmation = Input::get( 'password_confirmation' );
		
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
	 */
	public function getCreate()
	{
		return View::make('site/nonboard/create');
	}


	/**
	 * Displays the login form
	 */
	public function getLogin()
	{
		$user = Auth::user();
		if (!empty($user->id)){
			return Redirect::to('/');
		}

		return View::make('site/nonboard/login');
	}

	/**
	 * Attempt to do login
	 */
	public function postLogin()
	{
		$input = array(
			'email'    => Input::get( 'email' ), // May be the username too
			'username' => Input::get( 'email' ), // May be the username too
			'password' => Input::get( 'password' ),
			'remember' => Input::get( 'remember' ),
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
	 */
	public function getForgot()
	{
		return View::make('site/nonboard/forgot');
	}

	/**
	 * Attempt to reset password with given email
	 */
	public function postForgot()
	{
		if( Confide::forgotPassword( Input::get( 'email' ) ) )
		{
			return Redirect::to('user/login')
				->with( 'notice', Lang::get('confide::confide.alerts.password_forgot') );
		}
		else
		{
			return Redirect::to('user/forgot')
				->withInput()
				->with( 'error', Lang::get('confide::confide.alerts.wrong_password_forgot') );
		}
	}

	/**
	 * Shows the change password form with the given token
	 */
	public function getReset( $token )
	{

		return View::make('site/user/reset')
			->with('token',$token);
	}


	/**
	 * Attempt change password of the user.
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
	
	public function getConfirmation()
	{
		return View::make('site.nonboard.confirmation');
	}
	
	public function registerNetworks()
	{
		/*
		use data to show which networks are registered and which are not
		$data = array();

		$user = Auth::user();
		*/

		//return View::make('site.nonboard.registernetworks')->with($data);
		return View::make('site.nonboard.registernetworks');
	}

	public function firstTime()
	{
		$user = Auth::DcafUser;
		// first user from a company or agency
		if ($first) {
			// Do all first time initializations. 

			// New Company
			//$companyName = Input::get('companyName');
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

		// Not the first user from their company
		else {
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
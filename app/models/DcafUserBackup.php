<?php namespace Models;
/**
 * import namespaces and class names
 * (please see aliases defined in app/config/app.php)
 */
// use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Auth\UserInterface;
use Illuminate\Support\Facades\Auth;
use LaravelBook\Ardent\Ardent;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\Confide;
use Zizaco\Confide\ConfideEloquentRepository;
use Zizaco\Entrust\HasRole;
use Carbon\Carbon;

/**
 * DCAF_User Model
 * 
 * @link       http://laravel.com/docs/eloquent
 * @since      1.0
 * @see        Function/method/class relied on
 * 
 * @package    Models
 * @copyright  Copyright (c) 2013-2014 DCAF
 * @license    {license}
 * @author     Alexander Rosenberg
 * @author     Shashank Sanjay
 * @version    1.0
 **
 * Usage:
 * $user = new DCAF_User();
 * $user->name = 'John';
 * $success = $user->save();
 */
class DCAF_User extends ConfideUser implements UserProfileInterface, UserInterface
{
	use HasRole;
	/**
	 * DCAF_User version
	 *
	 * @since  1.0
	 * @type   string
	 */
	const VERSION = '1.0-dev';
	
	/**********************
	 * Instance Variables *
	 **********************/
	
	/**
	 * The database table used by the model.
	 *
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table		= 'DCAF_Users';		// defaults to classname + 's'
	
	
	/**
	 * List of attributes to be excluded from the model's JSON form.
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $hidden = array('password');
	
	/**
     * List of attribute names which should be hashed by Ardent.
     * 
	 * @since  1.0
	 * @access public
     * @type   array
     */
    //public static $passwordAttributes = array('password');
	
	/**
     * When set to true, Ardent automatically replaces the plain-text password
     * attribute (from $passwordAttributes) with the hash checksum on save.
	 * See {@link http://laravel.com/docs/security} for implementation details
     * 
     * @since  1.0
	 * @access public
	 * @type   bool
     */
    //public $autoHashPasswordAttributes = true;
	
	/**
	 * Ardent validation rules
	 * 
	 * @override  LaravelBook\Ardent\Ardent::rules
	 * 
	 * @since  1.0
	 * @access public
	 * @type   array
	 */
	public static $rules = array(
		'username'	=> 'required|alpha_dash|between:4,16',
		'email'		=> 'required|email|unique:users',
		'password'	=> 'required|alpha_num|between:6,11|confirmed',
		'password_confirmation' => 'required|alpha_num|between:6,11',
	);
	
	/**
     * Ardent custom error messages
     * 
	 * @override  LaravelBook\Ardent\Ardent::customMessages
	 * 
	 * @since  1.0
	 * @access public
     * @type   array
     */
    public static $customMessages = array();
	
	/**
     * When set to true and validation fails, causes the Ardent validation procedure
	 * to throw an {@link InvalidModelException} instead of returning false.
     * 
     * @since  1.0
	 * @access public
     * @type   bool
     */
    public $throwOnValidation = false;
	
    /**
     * When set to true and a model cannot be found, causes the Ardent findOrFail method
	 * to throw an {@link ModelNotFoundException} instead of returning false.
     * 
	 * @override  LaravelBook\Ardent\Ardent::throwOnFind
	 * 
     * @since  1.0
	 * @access public
     * @type   array
     */
    public static $throwOnFind = false;
	
    /**
     * When set to true, Ardent will automatically populate ("hydrate") the object with model attributes
	 * from Input::all() before doing validation, if the object does not already contain any attributes.
     * 
	 * When set to false, populate the object like so:
	 * $user->fill(array(
	 *     'email'    => Input::get('email'), 
	 *     'name'     => Input::get('name'),
	 *     'password' => Hash::make(Input::get('password')),
	 * ));
	 * 
     * @since  1.0
	 * @access public
     * @type   bool
     */
    public $autoHydrateEntityFromInput = false;
	
    /**
	 * When set to true, bypasses checking whether object already contains any attributes and enforces
     * hydration of model attributes regardless.
     *
     * @var bool
     */
    public $forceEntityHydrationFromInput = true;
	
    /**
     * If set to true, the object will automatically remove redundant model
     * attributes (i.e. confirmation fields).
     *
     * @var bool
     */
    public $autoPurgeRedundantAttributes = false;
	
    /**
     * Array of closure functions which determine if a given attribute is deemed
     * redundant (and should not be persisted in the database)
     *
     * @var array
     */
    protected $purgeFilters = array();
	
    protected $purgeFiltersInitialized = false;
	
    /**
     * List of attribute names which should be hashed using the Bcrypt hashing algorithm.
     *
     * @var array
     */
    public static $passwordAttributes = array();
	
    /**
     * If set to true, the model will automatically replace all plain-text passwords
     * attributes (listed in $passwordAttributes) with hash checksums
     *
     * @var bool
     */
    public $autoHashPasswordAttributes = true;
	
    /**
     * If set to true will try to instantiate the validator as if it was outside Laravel.
     *
     * @var bool
     */
    protected static $externalValidator = false;

    /**
     * A Translator instance, to be used by standalone Ardent instances.
     *
     * @var \Illuminate\Validation\Factory
     */
    protected static $validationFactory;
	
	/**
	 * Constructor
     * 
	 * @access public
	 * 
	 * @param  array  $attributes
	 * @return new DCAF_User instance
     */
	public function __construct(array $attributes = array())
	{
		parent::__construct($attributes);
	}
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function userProfile()
    {
		// Polymorphic Relation
        return $this->morphMany('Models\UserProfile', 'profile');
    }
	
	public function networkUsers()
    {
        return $this->hasMany('Models\NetworkUser', $primaryKey);
    }
	
	public function billingContact()
	{
		return $this->belongsTo('Models\BillingAccount');
	}
	
	public function employees()
	{
		// has_many_and_belongs_to() in Laravel 3
		return $this->belongsToMany('Models\ClientCompany', 'Client_Users', 'uid', 'company_id');
	}

	public function DCAF_Roles()
	{
		//
		return $this->belongsToMany('Models\DCAF_Roles', 'DCAF_User_Roles', 'uid', 'role_id');
	}
	
	/********************
	 * Accessor Methods *
	 ********************/
	
	/**
	 * Get user by username
	 * 
	 * (from Laravel-4-Bootstrap-Starter-Site User model)
	 * 
	 * @param $username
	 * @return mixed
	 */
     public function getUserByUsername($username)
     {
     	return $this->where('username', '=', $username)->first();
     }
	
	/**
	 * Get the date the user was created.
	 * 
	 * (from Laravel-4-Bootstrap-Starter-Site User model)
	 * 
	 * @return string
	 */
	public function joined()
	{
		return String::date(Carbon::createFromFormat('Y-n-j G:i:s', $this->created_at));
	}
	
	/**
     * Returns user's current role ids only.
	 * 
	 * (from Laravel-4-Bootstrap-Starter-Site User model)
	 * 
     * @return array|bool
     */
    public function currentRoleIds()
    {
        $roles = $this->roles;
        $roleIds = false;
		
        if (!empty($roles))
		{
            $roleIds = array();
			
            foreach($roles as &$role) {
                $roleIds[] = $role->id;
            }
        }
		
		return $roleIds;
    }
	 
	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}
	
	/**
	 * (from Laravel-4-Bootstrap-Starter-Site User model)
	 */
	public function currentUser()
	{
		return (new Confide(new ConfideEloquentRepository()))->user();
	}
		
	/**
	 * Gets the user's internal id.
	 *
	 * @access public
	 * @return int
	 */
	public function getUID(){
		//
	}
	
	/**
	 * Gets the user's username.
	 *
	 * @access public
	 * @return string
	 */
	public function getUsername() {
		//
	}
	
	/**
	 * Gets the user's gender.
	 *
	 * @access public
	 * @return string
	 */
	public function getGender() {
		//
	}
	
	/**
	 * Gets the user's email address.
	 *
	 * @access public
	 * @return string
	 */
	public function getEmail() {
		//
	}
	
	/**
	 * Gets the user's first name,
	 * optionally including middle initial.
	 *
	 * @access public
	 * @return string
	 */
	public function getFirstName() {
		//
	}
	
	/**
	 * Gets the user's last name.
	 *
	 * @access public
	 * @return string
	 */
	public function getLastName() {
		//
	}
	
	/******************
	 * Setter Methods *
	 ******************/
	
    /**
     * Save roles inputted from multiselect
	 * 
	 * (from Laravel-4-Bootstrap-Starter-Site User model)
	 * 
     * @param $inputRoles
     */
    public function saveRoles($inputRoles)
    {
        if (!empty($inputRoles)) {
            $this->roles()->sync($inputRoles);
        } else {
            $this->roles()->detach();
        }
    }
		
	/**
	 * Sets the user's username
	 *
	 * @access public
	 * @param  string	$uname
	 */
	public function setUsername($uname) {
		//
	}
	
	/**
	 * Sets the user's gender
	 *
	 * @access public
	 * @param  string	$gender
	 */
	public function setGender($gender) {
		//
	}
	
	/**
	 * Sets the user's email
	 *
	 * @access public
	 * @param  string	$email
	 */
	public function setEmail($email) {
		//
	}
	
	/**
	 * Sets the user's first name
	 *
	 * @access public
	 * @param  string	$fname
	 */
	public function setFirstName($fname) {
		//
	}
	
	/**
	 * Sets the user's last name
	 *
	 * @access public
	 * @param  string	$lname
	 */
	public function setLastName($lname) {
		//
	}
	
	/******************
	 * Helper Methods *
	 ******************/
	
	/**
	 * Fill the model with an array of attributes.
	 * 
	 * @override
	 * @inherited \Illuminate\Database\Eloquent\Model
	 * 
	 * @param  array  $attributes
	 * @return \Illuminate\Database\Eloquent\Model|static
	 *
	 * @throws \Illuminate\Database\Eloquent\MassAssignmentException
	 *
	 *public function fill(array $attributes) {}
	*/
	
	/**
     * Validates the model instance.
     * 
	 * @override
	 * @inherited \LaravelBook\Ardent\Ardent
	 * 
     * @param  array  $rules          Validation rules
     * @param  array  $customMessages Custom error messages
     * @return bool
	 * 
	 * @throws \Illuminate\Database\Eloquent\MassAssignmentException
     * @throws \LaravelBook\Ardent\InvalidModelException
     *
     *public function validate(array $rules = array(), array $customMessages = array()) {}
	*/
	
	/**
     * Redirect after auth.
     * If $ifValid is true, redirect a logged in user.
	 * 
	 * (from Laravel-4-Bootstrap-Starter-Site User model)
	 * 
     * @param $redirect
     * @param bool $ifValid
     * @return mixed
     */
    public static function checkAuthAndRedirect($redirect, $ifValid=false)
    {
        // Get user information
        $user = Auth::user();
        
        $redirectTo = false;
		
		// Not logged in redirect, set session.
        if (empty($user->id) && ! $ifValid)
        {
			Session::put('loginRedirect', $redirect);
			$redirectTo = Redirect::to('user/login')->with('notice', Lang::get('user/user.login_first'));
		}
		// Valid user, we want to redirect.
		else if (!empty($user->id) && $ifValid)
		{
			$redirectTo = Redirect::to($redirect);
		}
		
		return array($user, $redirectTo);
	}
	
	/**
	 * notable class (static) method examples
	 **
	 * $users = User::all();
	 * $user  = User::find(1);
	 **
	 * $users = User::whereRaw('age > ? and votes = 100', array(25))->get();
	 **
	 * retrieves a model instance from the database by
	 * primary key, or throws an exception if not found,
	 * which may be caught with an App::error handler
	 * 
	 * $model = User::findOrFail(1);
	 **
	 * $model = User::where('votes', '>', 100)->firstOrFail();
	 **
	 * use Illuminate\Database\Eloquent\ModelNotFoundException;
	 * 
	 * // register an error handler
	 * App::error(function(ModelNotFoundException $e) {
	 *     return Response::make('Not Found', 404);
	 * });
	 **
	 * $count = User::where('votes', '>', 100)->count();
	 **
	 * $users = User::where('votes', '>', 100)->take(10)->get();
	 * foreach ($users as $user)
	 * {
	 *     var_dump($user->name);
	 * }
	 **
	 * User::chunk(200, function($users)
	 * {
	 *     foreach ($users as $user)
	 *     {
	 *         // {implementation code}
	 *     }
	 * });
	 */
	
	/**
	 * Destructor
	 * 
	 * Note: As of PHP 5.3.10 destructors are not
	 *     run on shutdown caused by fatal errors.
	 * see also: http://www.php.net/manual/en/features.gc.php
	 */
	public function __destruct()
	{
		// {implementation code}
		// parent::__destruct();
	}
}

?>

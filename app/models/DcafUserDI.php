<?php
/**
 * Eloquent Model
 * 
 * @link       http://laravel.com/docs/eloquent
 * @since      1.0
 * @see        Function/method/class relied on
 * 
 * @package    {package}
 * @subpackage {subpackage}
 * @copyright  Copyright (c) 2013-2014 DCAF
 * @license    {license}
 * @author     Alexander Rosenberg
 * @version    1.0
 */

/**
 * import namespaces and class names
 */
// use Illuminate\Auth\UserInterface;
// use LaravelBook\Ardent\Ardent;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\Confide;
use Zizaco\Confide\ConfideEloquentRepository;
use Zizaco\Entrust\HasRole;
use Robbo\Presenter\PresentableInterface;
use Carbon\Carbon;
use HasRole;


/**
 * Eloquent User Model
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 * @throws  exceptionclass
 **
 * Note:
 * configure database connection in app/config/database.php
 **
 * Usage:
 * $user = new User();
 * $user->name = 'John';
 * $success = $user->save();
 */
// class DCAF_User extends ConfideUser implements AbstractUser, PresentableInterface
class DcafUserDI extends dualInheritance implements AbstractUser, PresentableInterface
{
	/**
	 * DCAF_User version
	 *
	 * @since  1.0
	 * @type   string
	 */
	const VERSION = '1.0-dev';
	
	/**
     * Laravel application instance
     * 
	 * @since  1.0
	 * @access public
     * @type   Illuminate\Foundation\Application
     *
    public static $app;
	*/
	
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
	
	protected $primaryKey	= 'id';				// defaults to 'id'
	protected $incrementing	= false;			// defaults to true; false disables auto-incrementing the primary key
	protected $timestamps	= false;			// defaults to true to maintain 'updated_at' and 'created_at' columns
	
	/**
	 * Defines which attributes can be set through
	 * the model's constructor (mass-assignable)
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	// protected $fillable	= array('username', 'email', 'first_name', 'last_name');	// white-list approach
	// protected $guarded	= array('id', 'password');									// black-list approach
	protected $fillable		= array('*');	// permits all properties to be set from the constructor
	// protected $guarded	= array('*');	// (default) blocks all properties from "Mass Assignment"
	
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
     * @var    array
     */
    public static $passwordAttributes = array('password');
	
	/**
     * This way the model will automatically replace the plain-text password
     * attribute (from $passwordAttributes) with the hash checksum on save.
     * 
     * @since  1.0
	 * @access public
	 * @type   bool
     */
    public $autoHashPasswordAttributes = true;
	
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
    public static $passwordAttributes = array('password');
	
    /**
     * When set to true, Ardent automatically replaces the plain-text password
     * attribute (from $passwordAttributes) with the hash checksum on save.
	 * See {@link http://laravel.com/docs/security} for implementation details
     *
     * @var bool
     */
    public $autoHashPasswordAttributes = false;
	
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
		parent::__construct('ConfideUser', 'AbstractUser');
		
		/*
		if (!static::$app) {
			static::$app = app();
		}
		*/
	}
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function abstractUsers()
    {
        return $this->morphMany('AbstractUser', 'morphTo');
    }
	
	public function networkUsers()
    {
        return $this->hasMany('NetworkUser', static::$primaryKey);
    }
	
	/********************
	 * Accessor Methods *
	 ********************/
	
	/**
	 * (from Laravel-4-Bootstrap-Starter-Site User model)
	 * 
	 * @requiredBy Robbo\Presenter\PresentableInterface
	 * @return     Robbo\Presenter\Presenter
	 */
	public function getPresenter()
    {
        return new UserPresenter($this);
    }
	
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
	 * Get the unique identifier for the user.
	 * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
	 * @return mixed
	 *
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}
	*/
	
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
	 * Get the password for the user.
	 * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
	 * @return string
	 *
	public function getAuthPassword()
	{
		return $this->password;
	}
	*/
	
	/**
     * [Deprecated]
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated
	 * @override
	 * @inherited \Illuminate\Database\Eloquent\Model
	 * 
	 * @fixed
     *
    public function getRules()
    {
		return static::$rules;
    }
	*/
	
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
	public function fill(array $attributes) {}
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
    public function validate(array $rules = array(), array $customMessages = array()) {}
	*/
	
	/**
	 * Confirm user's email is valid.
	 * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
	 * @return bool
	 *
	public function confirm()
	{
		$this->confirmed = 1;
		
		// ConfideRepository will update the database
		static::$app['confide.repository']->confirmUser($this);
		
		return true;
    }
	*/
	
	/**
	 * Send password reset email
	 * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
	 * @return string
	 *
    public function forgotPassword()
    {
        // ConfideRepository will generate token (and save it into database)
        $token = static::$app['confide.repository']->forgotPassword($this);

        $view = static::$app['config']->get('confide::email_reset_password');

        $this->sendEmail('confide::confide.email.password_reset.subject', $view, array('user'=>$this, 'token'=>$token));

        return true;
    }
	*/
	
	/**
     * Change user password
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @param  $params
     * @return string
     *
    public function resetPassword($params)
    {
        $password = array_get($params, 'password', '');
        $passwordConfirmation = array_get($params, 'password_confirmation', '');

        if ($password == $passwordConfirmation)
        {
            return static::$app['confide.repository']->changePassword($this, static::$app['hash']->make($password));
        }
        else
		{
            return false;
        }
    }
	*/
	
	/**
     * Save model data to database
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
	 * @override  Ardent save method
	 * 
     * @param  array    $rules:array
     * @param  array    $customMessages
     * @param  array    $options
     * @param  \Closure $beforeSave
     * @param  \Closure $afterSave
     * @return bool
     * /
    public function save(array $rules = array(), array $customMessages = array(), array $options = array(), \Closure $beforeSave = null, \Closure $afterSave = null)
    {
        $duplicated = false;

        if (!$this->id)
		{
			$duplicated = static::$app['confide.repository']->userExists($this);
        }
		
		if (!$duplicated)
        {
			return $this->real_save($rules, $customMessages, $options, $beforeSave, $afterSave);
        }
		else
		{
			static::$app['confide.repository']->validate();
			$this->validationErrors->add(
				'duplicated',
				static::$app['translator']->get('confide::confide.alerts.duplicated_credentials')
			);
			
			return false;
        }
    }
	*/
	
	/**
     * Ardent method overloading:
     * Before saving the user. Generate a confirmation
     * code if is a new user.
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @param  bool $forced
     * @return bool
     *
    public function beforeSave($forced = false)
    {
        if (empty($this->id))
        {
            $this->confirmation_code = md5(uniqid(mt_rand(), true));
        }

        /*
         * remove password_confirmation field before saving to the database
         * /
        if (isset($this->password_confirmation))
        {
            unset($this->password_confirmation);
        }

        return true;
    }
	*/

    /**
     * Ardent method overloading:
     * After save, delivers the confirmation link email.
     * code if is a new user.
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @param  bool $success
     * @param  bool $forced
     * @return bool
     *
    public function afterSave($success=true, $forced = false)
    {
        if (!$this->confirmed && !static::$app['cache']->get('confirmation_email_'.$this->id))
        {
            // on behalf or the config file we should send and email or not
            if (static::$app['config']->get('confide::signup_email') == true)
            {
                $view = static::$app['config']->get('confide::email_account_confirmation');
                $this->sendEmail('confide::confide.email.account_confirmation.subject', $view, array('user' => $this));
            }
            
			// Save in cache that the email has been sent.
            $signup_cache = (int)static::$app['config']->get('confide::signup_cache');
			
            if ($signup_cache !== 0)
            {
                static::$app['cache']->put('confirmation_email_'.$this->id, true, $signup_cache);
            }
        }

        return true;
    }
	*/

    /**
     * Runs the real eloquent save method or returns
     * true if it's under testing.
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @param  array    $rules
     * @param  array    $customMessages
     * @param  array    $options
     * @param  \Closure $beforeSave
     * @param  \Closure $afterSave
     * @return bool
     *
    protected function real_save(array $rules = array(), array $customMessages = array(), array $options = array(), \Closure $beforeSave = null, \Closure $afterSave = null)
    {
        if (defined('CONFIDE_TEST'))
        {
            $this->beforeSave();
            $this->afterSave(true);
            return true;
        }
        else
		{
            /*
             * Prevents a non-modified password from triggering a validation error.
             * @fixed Pull #110
             * /
            if (isset($rules['password']) && $this->password == $this->getOriginal('password'))
            {
                unset($rules['password']);
                unset($rules['password_confirmation']);
            }

            return parent::save($rules, $customMessages, $options, $beforeSave, $afterSave);
        }
    }
	*/

    /**
     * Add the namespace 'confide::' to view hints.
     * this makes it possible to send emails using package views from
     * the command line
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @return void
     *
    protected static function fixViewHint()
    {
		if (isset(static::$app['view.finder']))
			static::$app['view.finder']->addNamespace('confide', __DIR__.'/../../views');
    }
	*/

    /**
     * Send email using the lang sentence as subject and the viewname
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @param  mixed $subject_translation
     * @param  mixed $view_name
     * @param  array $params
     * @return voi.
     *
    protected function sendEmail( $subject_translation, $view_name, $params = array() )
    {
        if ( static::$app['config']->getEnvironment() == 'testing' )
            return;

        static::fixViewHint();

        $user = $this;

        static::$app['mailer']->send($view_name, $params, function($m) use ($subject_translation, $user)
        {
            $m->to( $user->email )
                ->subject( ConfideUser::$app['translator']->get($subject_translation) );
        });
    }
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
	
	/*
    |--------------------------------------------------------------------------
    | Deprecated variables and methods
    |--------------------------------------------------------------------------
    */

    /**
     * Rules for updating a user
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated
     * @var array
     *
    protected $updateRules = array(
        'username'	=> 'required|alpha_dash',
        'email'		=> 'required|email',
        'password'	=> 'between:4,11|confirmed',
        'password_confirmation' => 'between:4,11',
    );
	*/

    /**
     * Alias of save but uses updateRules instead of rules.
	 * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated  use updateUnique() instead
	 * 
     * @param  array   $rules
     * @param  array   $customMessages
     * @param  array   $options
     * @param  Closure $beforeSave
     * @param  Closure $afterSave
     * @return bool
     *
    public function amend(array $rules = array(), array $customMessages = array(), array $options = array(), \Closure $beforeSave = NULL, \Closure $afterSave = NULL)
    {
        if (empty($rules)) {
            $rules = $this->getUpdateRules();
        }
        return $this->save($rules, $customMessages, $options, $beforeSave, $afterSave);
    }
	*/

    /**
     * [Deprecated] Generates UUID and checks it for uniqueness against a table/column.
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated
	 * 
     * @param  $table
     * @param  $field
     * @return string
     *
    protected function generateUuid($table, $field)
    {
        return md5(uniqid(mt_rand(), true));
    }
	*/

    /**
     * [Deprecated]
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated
     *
    public function getUpdateRules()
    {
        return $this->updateRules;
    }
	*/

    /**
     * [Deprecated] Parses the two given users and compares the unique fields.
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated
	 * 
     * @param $oldUser
     * @param $updatedUser
     * @param array $rules
     *
    public function prepareRules($oldUser, $updatedUser, $rules=array())
    {
        if (empty($rules)) {
            $rules = $this->getRules();
        }

        foreach ($rules as $rule => $validation)
		{
            // get the rules with unique.
            if (strpos($validation, 'unique'))
			{
                // Compare old vs new
                if ($oldUser->$rule != $updatedUser->$rule)
				{
                    // Set update rule to creation rule
                    $updateRules = $this->getUpdateRules();
                    $updateRules[$rule] = $validation;
                    $this->setUpdateRules($updateRules);
                }
            }
        }
    }
	*/

    /**
     * [Deprecated]
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated
     *
    public function setUpdateRules($set)
    {
		$this->updateRules = $set;
    }
	*/

    /**
     * [Deprecated] Find an user by it's credentials. Perform a 'where' within
     * the fields contained in the $identityColumns.
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated  Use ConfideRepository getUserByIdentity instead.
	 * 
     * @param  array  $credentials      An array containing the attributes to search for
     * @param  mixed  $identityColumns  Array of attribute names or string (for one atribute)
     * @return ConfideUser              User object
     *
    public function getUserFromCredsIdentity($credentials, $identity_columns = array('username', 'email'))
    {
		return static::$app['confide.repository']->getUserByIdentity($credentials, $identity_columns);
    }
	*/

    /**
     * [Deprecated] Checks if an user exists by it's credentials. Perform a 'where' within
     * the fields contained in the $identityColumns.
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated Use ConfideRepository getUserByIdentity instead.
	 * 
     * @param  array  $credentials      An array containing the attributes to search for
     * @param  mixed  $identityColumns  Array of attribute names or string (for one atribute)
     * @return boolean                  Exists?
     *
    public function checkUserExists($credentials, $identity_columns = array('username', 'email'))
    {
        $user = static::$app['confide.repository']->getUserByIdentity($credentials, $identity_columns);
		return $user ? true : false;
    }
	*/
	
    /**
     * [Deprecated] Checks if an user is confirmed by it's credentials. Perform a 'where' within
     * the fields contained in the $identityColumns.
     * 
	 * @override
	 * @inherited \Zizaco\Confide\ConfideUser
	 * 
     * @deprecated Use ConfideRepository getUserByIdentity instead.
	 * 
     * @param  array  $credentials      An array containing the attributes to search for
     * @param  mixed  $identityColumns  Array of attribute names or string (for one atribute)
     * @return boolean                  Is confirmed?
     *
    public function isConfirmed($credentials, $identity_columns = array('username', 'email'))
    {
        $user = static::$app['confide.repository']->getUserByIdentity($credentials, $identity_columns);
        return !is_null($user) && $user->confirmed;
    }
	*/
    
	/**
	 * @override
	 *
	public static all() {}
	*/
	
	/**
	 * @override
	 *
	public static find($primaryKey) {}
	*/
	
	/**
	 * retrieves a model instance from the database by
	 * primary key, or throws an exception if not found,
	 * which may be caught with an App::error handler
	 * 
	 * @override
	 *
	public static findOrFail($primaryKey) {}
	*/
	
	/**
	 * notable class (static) method examples
	 **
	 * $users = User::all();
	 * $user  = User::find(1);
	 **
	 * $users = User::whereRaw('age > ? and votes = 100', array(25))->get();
	 **
	 * $model = User::findOrFail(1);
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
		parent::__destruct();
	}
}

?>
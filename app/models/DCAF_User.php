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
 * 
 * Note:
 * Eloquent is defined as an alias of Illuminate\Database\Eloquent\Model
 * in app/config/app.php via the php function class_alias()
 */
// use Illuminate\Database\Eloquent\Model as Eloquent;
// use Eloquent;
use LaravelBook\Ardent\Ardent;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\Confide;
use Zizaco\Confide\ConfideEloquentRepository;
use Zizaco\Entrust\HasRole;
use Robbo\Presenter\PresentableInterface;
use Carbon\Carbon;

/**
 * @abstract
 *
abstract class User
{
	private $id;
	private $username;
	private $gender;
	private $email;
	private $firstName;
	private $lastName;
	private $likes = array();
}
*/

// @extends, @implements, @global

/**
 * Eloquent User Model
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 * @throws  exceptionclass
 **
 * Ardent
 * 
 * 
 **
 * Note:
 * configure database connection in app/config/database.php
 **
 * Usage:
 * $user = new User();
 * $user->name = 'John';
 * $success = $user->save();
 */
class DCAF_User extends Ardent implements UserInterface
{
	/**
     * A reference to another Foo object
	 * 
	 * @since  1.0
	 * @access private
     * @type   string
     */
    private $link;
	
	/**
	 * The Laravel framework version.
	 *
	 * @since  1.0
	 * @type   string
	 */
	const VERSION = '1.0-dev';
	
	/**
     * Laravel application
     *
     * @var Illuminate\Foundation\Application
     */
    public static $app;
	
	/**
	 * The database table used by the model.
	 *
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table		= 'users';		// defaults to classname + 's'
	
	protected $primaryKey	= 'FB_User_ID';	// defaults to 'id'
	protected $incrementing	= false;		// defaults to true; false disables auto-incrementing the primary key
	protected $timestamps	= false;		// defaults to true to maintain 'updated_at' and 'created_at' columns
	
	/**
	 * defines which properties can be set through
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
	 * The attributes excluded from the model's JSON form.
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $hidden = array('password');
	
	/**
     * List of attribute names which should be hashed. (Ardent)
     *
	 * @since  1.0
	 * @access public
     * @var    array
     */
    public static $passwordAttributes = array('password');
	
	/**
     * This way the model will automatically replace the plain-text password
     * attribute (from $passwordAttributes) with the hash checksum on save
     *
     * @var bool
     */
    public $autoHashPasswordAttributes = true;
	
	/**
	 * Ardent validation rules
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
	 * Constructor
     * 
	 * @access public
	 * 
     * @param  string $name
	 * @param  array  $attributes
	 * @return new DCAF_User instance
     */
	public function __construct($name = NULL, array $attributes = array())
	{
		// {implementation code}
		parent::__construct();
	}
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function posts()
    {
        return $this->has_many('Post', 'author_id');
    }
	
	/********************
	 * Accessor Methods *
	 ********************/
	
	/**
	 * @requiredBy Robbo\Presenter\PresentableInterface
	 * @return     Robbo\Presenter\Presenter
	 *
	public function getPresenter()
    {
        return new UserPresenter($this);
    }
	*/
	
	/**
     * Get user by username
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
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
	  return $this->getKey();
	}
	 
	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
	  return $this->password;
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
     * Get the date the user was created.
     *
     * @return string
     */
    public function joined()
    {
        return String::date(Carbon::createFromFormat('Y-n-j G:i:s', $this->created_at));
    }
	
    /**
     * Save roles inputted from multiselect
	 * 
     * @param $inputRoles
     */
    public function saveRoles($inputRoles)
    {
        if(! empty($inputRoles)) {
            $this->roles()->sync($inputRoles);
        } else {
            $this->roles()->detach();
        }
    }
	
    /**
     * Returns user's current role ids only.
	 * 
     * @return array|bool
     */
    public function currentRoleIds()
    {
        $roles = $this->roles;
        $roleIds = false;
        if( !empty( $roles ) ) {
            $roleIds = array();
            foreach( $roles as &$role )
            {
                $roleIds[] = $role->id;
            }
        }
        return $roleIds;
    }
	
    /**
     * Redirect after auth.
     * If ifValid is set to true it will redirect a logged in user.
	 * 
     * @param $redirect
     * @param bool $ifValid
     * @return mixed
     */
    public static function checkAuthAndRedirect($redirect, $ifValid=false)
    {
        // Get the user information
        $user = Auth::user();
        $redirectTo = false;

        if(empty($user->id) && ! $ifValid) // Not logged in redirect, set session.
        {
            Session::put('loginRedirect', $redirect);
            $redirectTo = Redirect::to('user/login')
                ->with( 'notice', Lang::get('user/user.login_first') );
        }
        elseif(!empty($user->id) && $ifValid) // Valid user, we want to redirect.
        {
            $redirectTo = Redirect::to($redirect);
        }

        return array($user, $redirectTo);
    }

    public function currentUser()
    {
        return (new Confide(new ConfideEloquentRepository()))->user();
    }
	
	
	
	
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
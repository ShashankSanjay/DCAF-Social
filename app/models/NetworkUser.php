<?php
/**
 * import namespaces and class names
 */
use Illuminate\Auth\UserInterface;
use LaravelBook\Ardent\Ardent;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\Confide;
use Zizaco\Confide\ConfideEloquentRepository;
use Zizaco\Entrust\HasRole;
use Robbo\Presenter\PresentableInterface;
use Carbon\Carbon;

/**
 * NetworkUser User Model
 * 
 * @author	Alexander Rosenberg
 * @author	Shashank Sanjay
 * @version	1.0
 */
class NetworkUser extends Ardent implements UserProfileInterface, UserInterface
{
	/**
	 * The database table used by the model.
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table		= 'Network_Users';	// defaults to classname + 's'
	
	protected $primaryKey	= 'FB_User_ID';		// defaults to 'id'
	public $incrementing	= false;			// defaults to true; false disables auto-incrementing the primary key
	public $timestamps		= false;			// defaults to true to maintain 'updated_at' and 'created_at' columns
	
	/**
	 * defines which properties can be set through
	 * the model's constructor (mass-assignable)
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $fillable		= array('*');	// permits all properties to be set from the constructor
	// protected $guarded	= array('*');	// (default) blocks all properties from "Mass Assignment"
	
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
	);
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function userProfile()
	{
		return $this->belongsTo('UserProfile', 'profile_id');
	}
	
	public function dcafUser()
	{
		return $this->belongsTo('DcafUser', 'DCAF_User_ID');
	}
	
	/********************
	 * Accessor Methods *
	 ********************/
	
	/**
	 * Get user by username
	 * 
	 * @param $username
	 * @return mixed
	 */
	public function getUsersByUsername($username)
	{
		return $this->UserProfile->where('username', '=', $username)->first();
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
	 * Gets the user's internal id.
	 *
	 * @access public
	 * @return int
	 */
	public function getUID()
	{
		// {implementation code}
	}
	
	/**
	 * Gets the user's username.
	 *
	 * @access public
	 * @return string
	 */
	public function getUsername()
	{
		// {implementation code}
	}
	
	/**
	 * Gets the user's gender.
	 *
	 * @access public
	 * @return string
	 */
	public function getGender()
	{
		// {implementation code}
	}
	
	/**
	 * Gets the user's email address.
	 *
	 * @access public
	 * @return string
	 */
	public function getEmail()
	{
		// {implementation code}
	}
	
	/**
	 * Gets the user's first name,
	 * optionally including middle initial.
	 *
	 * @access public
	 * @return string
	 */
	public function getFirstName()
	{
		// {implementation code}
	}
	
	/**
	 * Gets the user's last name.
	 *
	 * @access public
	 * @return string
	 */
	public function getLastName()
	{
		// {implementation code}
	}
	
	/******************/
	/* setter methods */
	/******************/
		
	/**
	 * Sets the user's username
	 *
	 * @access public
	 * @param  string	$uname
	 */
	public function setUsername($uname)
	{
		// {implementation code}
	}
	
	/**
	 * Sets the user's gender
	 *
	 * @access public
	 * @param  string	$gender
	 */
	public function setGender($gender)
	{
		// {implementation code}
	}
	
	/**
	 * Sets the user's email
	 *
	 * @access public
	 * @param  string	$email
	 */
	public function setEmail($email)
	{
		// {implementation code}
	}
	
	/**
	 * Sets the user's first name
	 *
	 * @access public
	 * @param  string	$fname
	 */
	public function setFirstName($fname)
	{
		// {implementation code}
	}
	
	/**
	 * Sets the user's last name
	 * 
	 * @access public
	 * @param  string	$lname
	 */
	public function setLastName($lname)
	{
		// {implementation code}
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
		if (!empty($roles)) {
			$roleIds = array();
			foreach ($roles as &$role)
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

		if (empty($user->id) && ! $ifValid) // Not logged in redirect, set session.
		{
			Session::put('loginRedirect', $redirect);
			$redirectTo = Redirect::to('user/login')
				->with( 'notice', Lang::get('user/user.login_first') );
		}
		else if (!empty($user->id) && $ifValid) // Valid user, we want to redirect.
		{
			$redirectTo = Redirect::to($redirect);
		}

		return array($user, $redirectTo);
	}
	
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

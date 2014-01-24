<?php
/**
 * import namespaces and class names
 */
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
 * @version	1.0
 */
class NetworkUser extends Ardent
{
	/**
	 * The database table used by the model.
	 *
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table		= 'networkUsers';	// defaults to classname + 's'
	
	protected $primaryKey	= 'FB_User_ID';		// defaults to 'id'
	protected $incrementing	= false;			// defaults to true; false disables auto-incrementing the primary key
	protected $timestamps	= false;			// defaults to true to maintain 'updated_at' and 'created_at' columns
	
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
	
	public function abstractUsers()
    {
        return $this->morphMany('AbstractUser', 'morphTo');
    }
	
	public function dcafUser()
    {
        return $this->belongsTo('DCAF_User', 'DCAF_User_ID');
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
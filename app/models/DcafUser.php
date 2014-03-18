<?php
/**
 * import namespaces and class names
 */
use Illuminate\Auth\UserInterface;
use Illuminate\Support\Facades\Auth;
use LaravelBook\Ardent\Ardent;
use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\Confide;
use Zizaco\Confide\ConfideEloquentRepository;
use Zizaco\Entrust\HasRole;
use Carbon\Carbon;

class DcafUser extends ConfideUser implements UserProfileInterface, UserInterface
{
	use HasRole;
	
	protected $table = 'DCAF_Users';
	
	public $primaryKey	= 'id';			// defaults to 'id'
	public $incrementing = true;		// defaults to true; false disables auto-incrementing the primary key
	public $timestamps	= true;			// defaults to true to maintain 'updated_at' and 'created_at' columns
	// protected $softDelete = true;		// defaults to false; true to set a timestamp in the deleted_at column
	
	public static $rules = array(
		'username'	=> 'required|alpha_dash|between:4,16',
		'email'		=> 'required|email|unique:users',
		'password'	=> 'required|alpha_num|between:6,11|confirmed',
		'password_confirmation' => 'required|alpha_num|between:6,11',
	);
		
	/**
	 * defines which properties can be set through
	 * the model's constructor (mass-assignable)
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	// protected $fillable	= array('*');		// permits all properties to be set from the constructor
	protected $guarded	= array('password');	// by default, blocks all properties from "Mass Assignment"
	
	/**
	 * array of attributes to be included
	 * for Array or JSON conversion
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $visible = array('first_name', 'last_name');
	
	/**
	 * array of attributes to be excluded
	 * from Array or JSON conversion
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $hidden = array('password');
	
	/**
	 * array of properties to be included in
	 * both the model's array and JSON forms
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $appends = array('is_admin');
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function userProfile()
    {
		// Polymorphic Relation
        return $this->morphMany('UserProfile', 'profile');
    }
	
	public function networkUsers()	// works!
    {
        return $this->hasMany('NetworkUser', 'DCAF_User_ID');
    }
	
	public function billingContact()
	{
		return $this->belongsTo('BillingAccount');
	}
	
	public function employers()		// works!
	{
		// has_many_and_belongs_to() in Laravel 3
		return $this->belongsToMany('ClientCompany', 'Client_User_Assoc', 'uid', 'company_id');
	}

	public function dcafRoles()	//works
	{
		return $this->belongsToMany('DcafRole', 'assigned_roles', 'dcaf_user_id', 'id');
	}

	public function DcafTeam()
	{
		return $this->belongsToMany('DcafTeam', 'DCAF_team_user', 'dcaf_user_id', 'dcaf_team_id') ;
	}

	public function facebook()
    {
        return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Facebook');
    }

    public function google()
    {
        return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Google');
    }
    
    public function twitter()
    {
        return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Twitter');
    }

    public function instagram()
    {
        return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Instagram');
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
     * Returns user's current role ids only.
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
	
	/******************/
	/* getter methods */
	/******************/
	
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
}
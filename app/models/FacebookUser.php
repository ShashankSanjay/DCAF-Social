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
 * FacebookUser User Model
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class FacebookUser extends Eloquent implements UserProfileInterface, UserInterface
{
	/**
	 * The database table used by the model.
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table		= 'FB_Users';		// defaults to classname + 's'
	
	//protected $primaryKey	= 'FB_User_ID';		// defaults to 'id'
	public $incrementing	= false;			// defaults to true; false disables auto-incrementing the primary key
	public $timestamps		= true;				// defaults to true to maintain 'updated_at' and 'created_at' columns
	
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
	 * array of attributes to be excluded
	 * from Array or JSON conversion
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $hidden = array();
	
	/**
	 * array of properties to be included in
	 * both the model's array and JSON forms
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $appends = array();
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function networkUser()
    {
        return $this->hasOne('NetworkUser', 'profile_id');
    }
    
    public function userProfile()
    {
        return $this->NetworkUser->userProfile();
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
	
	/******************/
	/* setter methods */
	/******************/
		
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
	
	/********************
	 * Instance Methods *
	 ********************/
	
	public function retrieve()
	{
		
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

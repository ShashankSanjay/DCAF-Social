<?php

use Illuminate\Auth\UserInterface;
use Models\UserProfileInterface;

/**
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
use Illuminate\Database\Eloquent\Model as Eloquent;
// use Eloquent;

/**
 * UserProfile Model
 * 
 * Base user profile class
 * 
 * @abstract
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class UserProfile extends Eloquent implements UserProfileInterface, UserInterface
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $id;
	protected $username;
	protected $gender;
	protected $email;
	protected $firstName;
	protected $lastName;
	
	/**
	 * The database table used by the model.
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table		= 'User_Profiles';
	
	/**
	 * Field name of the table's primary key
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	// protected $primaryKey	= 'User_ID';
	
	/**
	 * Permits all properties to be set from the constructor
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $fillable		= array('*');
	
	public function profile()
    {
        return $this->morphTo();
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
        // return $this->UserProfile->where('username', '=', $username)->first();
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
}

?>
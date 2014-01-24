<?php
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
// use Illuminate\Database\Eloquent\Model as Eloquent;
use Eloquent;

/**
 * AbstractUser
 * 
 * @abstract
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 */
/* abstract */ class AbstractUser extends Eloquent
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
	
	// protected $primaryKey	= 'User_ID';
	
	/**
	 * Permits all properties to be set from the constructor
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $fillable		= array('*');
}

?>
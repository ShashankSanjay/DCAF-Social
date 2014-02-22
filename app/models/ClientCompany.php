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
use Illuminate\Database\Eloquent\Model as Eloquent;
// use Eloquent;

/**
 * ClientCompany
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class ClientCompany extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $id;
	protected $name;
	protected $industry;
	
	/**
	 * The database table used by the model.
	 *
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table		= 'Client_Companies';
	
	/**
	 * Permits all properties to be set from the constructor
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $fillable		= array('*');
	
	public function employees()
	{
		// has_many_and_belongs_to() in Laravel 3
		return $this->belongsToMany('Models\DCAF_User', 'Client_Users', 'company_id', 'uid');
	}
}

?>
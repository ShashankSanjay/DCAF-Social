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
 * Billing Plan Model
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class BillingPlan extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $id;
	protected $planName;
	protected $paymentAmount;
	protected $paymentFrequency;
	protected $description;
	
	/**
	 * The database table used by the model.
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table = 'Billing_Plans';
	
	/**
	 * Permits all properties to be set from the constructor
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $fillable = array('*');
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function players()
	{
		return $this->hasMany('BillingAccount');
	}
}

?>
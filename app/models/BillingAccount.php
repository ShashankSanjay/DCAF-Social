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
 * Billing Account Model
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class BillingAccount extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $id;
	public    $billingContact;
	protected $paymentMethod;
	protected $billingName;
	protected $billingAddress;
	public    $billingPlan;
	
	/**
	 * The database table used by the model.
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table = 'Billing_Accounts';
	
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
	
	public function billingContact()
	{
		return $this->hasOne('DcafUser');
	}
	
	public function teams()
	{
		return $this->hasMany('DcafTeam', 'billing_account_id', 'id');
	}

	public function clientCompany()
	{
		return $this->belongsTo('ClientCompany');
	}
	
	public function billingPlan()
	{
		return $this->belongsTo('BillingPlan', 'plan_id', 'id');
	}
}

?>
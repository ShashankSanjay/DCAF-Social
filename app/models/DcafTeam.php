<?php
/**
 * @package    {package}
 * @subpackage {subpackage}
 * @copyright  Copyright (c) 2013-2014 DCAF
 * @license    {license}
 * @author     Alexander Rosenberg
 * @author     Shashank Sanjay
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
 * DCAF_Team
 * 
 * @author	Alexander Rosenberg
 * @version	1.0
 */
class DcafTeam extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $id;
	protected $teamMembers;
	protected $billingAccount;
	protected $subscriptionStatus;
	
	/**
	 * The database table used by the model.
	 *
	 * @since  1.0
	 * @access protected
	 * @type   string
	 */
	protected $table		= 'DCAF_Teams';
	
	/**
	 * Permits all properties to be set from the constructor
	 * 
	 * @since  1.0
	 * @access protected
	 * @type   array
	 */
	protected $fillable		= array('*');
	
	public function billingAccount()
	{
		return $this->belongsTo('BillingAccount', 'billing_account_id', 'id');
	}

	public function DcafUser()
	{
		//
		return $this->belongsToMany('DcafUser', 'DCAF_team_user', 'dcaf_team_id', 'dcaf_user_id') ;
	}
}

?>
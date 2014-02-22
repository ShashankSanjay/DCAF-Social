<?php

use Zizaco\Entrust\EntrustRole;
use Robbo\Presenter\PresentableInterface;

class DcafRole extends EntrustRole implements PresentableInterface
{
	protected $guarded = array();
	
	protected $table = 'DCAF_Roles';
	
	public static $rules = array(
		'name' => 'required|between:4,32'
	);
	
	protected $roleId;
	protected $roleName;
	
	public function DCAF_Users()
	{
		return $this->belongsToMany('DCAF_User', 'DCAF_User_Roles', 'role_id', 'uid');
	}
	
	/**
	 * Same presenter as the user model.
	 * 
	 * @return Robbo\Presenter\Presenter|UserPresenter
	 */
	public function getPresenter()
	{
		return new UserPresenter($this);
	}
	
	/**
	 * Provide an array of strings that map to valid roles.
	 * 
	 * @param array $roles
	 * @return stdClass
	 */
	public function validateRoles( array $roles )
	{
		$user = Confide::user();
		$roleValidation = new stdClass();
		foreach( $roles as $role )
		{
			// Make sure theres a valid user, then check role.
			$roleValidation->$role = ( empty($user) ? false : $user->hasRole($role) );
		}
		return $roleValidation;
	}
}

?>
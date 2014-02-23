<?php

use Zizaco\Entrust\EntrustRole;
use Robbo\Presenter\PresentableInterface;

class DcafRole extends EntrustRole implements PresentableInterface
{
	protected $guarded = array();
	
	protected $table = 'DCAF_Roles';
	
	public $primaryKey	= 'role_id';	// defaults to 'id'
	public $incrementing = true;		// defaults to true; false disables auto-incrementing the primary key
	public $timestamps	= true;			// defaults to true to maintain 'updated_at' and 'created_at' columns
	
	public static $rules = array(
	//	'name' => 'required|between:4,32'
	);
	
	protected $roleId;
	protected $roleName;
	
	public function dcafUsers()
	{
		return $this->belongsToMany('DcafUser', 'DCAF_User_Roles', 'dcaf_role_id', 'uid');
	}

	public function users()
	{
		return $this->belongsToMany('DcafUser', 'DCAF_User_Roles', 'dcaf_role_id', 'uid');
	}

	public function perms()
    {
        return $this->belongsToMany('Permission', 'permission_role', 'role_id', 'permission_id');
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
	public function validateRoles(array $roles)
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
	
	/**
     * Checks if a role with the given name exists.
     *
     * @param  string $name      
     * @return boolean           Exists?
     */
    public function checkRoleExists($name)
    {
        // 
    }
}

?>
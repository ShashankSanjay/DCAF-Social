<?php

class DCAF_Roles extends Eloquent {
    protected $guarded = array();
    
    protected $table = 'DCAF_Roles';
    
    public static $rules = array();

    protected $roleId;
    protected $roleName;

    public function DCAF_Users() 
    {
    	//
    	return $this->belongsToMany('DCAF_User', 'DCAF_User_Roles', 'role_id', 'uid');
    }
}
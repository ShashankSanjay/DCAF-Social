<?php
/**
 * @package    {package}
 * @subpackage {subpackage}
 * @copyright  Copyright (c) 2013-2014 DCAF
 * @license    {license}
 * @author     Alexander Rosenberg
 * @author 	   Shashank Sanjay
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
 * Brand Model
 */
class Brand extends Eloquent
{
	/**********************
	 * Instance Variables *
	 **********************/
	
	protected $id;
	protected $name;
	
	protected $table = 'Brands';
	
	protected $fillable	= array('*');
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	public function Pages()
	{
		return $this->hasMany('');
	}
	
	public function BrandGroup()
	{
		return $this->belongsTo('BrandGroup');
	}
	
	public function facebook()
	{
		return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Facebook');
	}
	
	public function google()
	{
		return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Google');
	}
	
	public function twitter()
	{
		return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Twitter');
	}
	
	public function instagram()
	{
		return $this->hasOne('Thomaswelton\LaravelOauth\Eloquent\Instagram');
	}
	
	// $brand = Brand::find(1);
	// $uid = $brand->facebook->oauth_uid;
}

?>
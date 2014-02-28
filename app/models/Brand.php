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

class Brand extends Eloquent
{
	//

	public function Pages() {
		//
		return $this->hasMany('');
	}

	public function BrandGroup() {
		//
		return $this->belongsTo('BrandGroup');
	}
}

?>
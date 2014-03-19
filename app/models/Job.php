<?php

/**
 * Job Model
 */
class Job extends Eloquent
{
	protected $table = 'job_queue';
	
	public $primaryKey	= 'id';			// defaults to 'id'
	public $incrementing = true;		// defaults to true; false disables auto-incrementing the primary key
	public $timestamps	= false;		// defaults to true to maintain 'updated_at' and 'created_at' columns
	
	/**
	 * permit all properties to be set through
	 * the constructor (mass-assignable)
	 * 
	 * see Laravel issue #1548
	 */
	protected $fillable	= array('*');
	protected $guarded	= array();
	
	/* Model Instance Variables */
	
	/**
	 * Model instance attributes
	 * 
	 * @override
	 * @var	array
	 */
	// public $attributes = array();
	
	/**
	 * Cron Job ID (Primary Key)
	 * 
	 * @var	int
	 */
	// public $id;
	
	/**
	 * Cron Job Name
	 * 
	 * @var	string
	 */
	// public $name;
	
	/**
	 * Cron Job Data
	 * 
	 * @var	string
	 */
	// public $data;
	
	/**
	 * Cron Job Type
	 * 
	 * @var	string
	 */
	// public $type;
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	// ...
	
	/********************/
	/* Accessor Methods */
	/********************/
	
	/**
	 * Eloquent accessor to decode the
	 * JSON content in the data field
	 * 
	 * @param	string	$data	JSON encoded data
	 * @return	mixed
	 */
	public function getDataAttribute($data)
	{
		// remove padding
		$data = preg_replace('/.+?({.+}).+/','$1',$data); 
		
		// search and remove comments like /* */ and //
		$data = preg_replace("#(/\*([^*]|[\r\n]|(\*+([^*/]|[\r\n])))*\*+/)|([\s\t]//.*)|(^//.*)#", '', $data);
    	
    	$data = str_replace(array("\n","\r"),"",$data);
    	$data = preg_replace('/([{,]+)(\s*)([^"]+?)\s*:/','$1"$3":',$data);
    	$data = preg_replace('/(,)\s*}$/','}',$data);	// allow trailing comma
		
		return json_decode($data);
	}
	
	/*******************/
	/* Mutator Methods */
	/*******************/
	
	/**
	 * Eloquent mutator to encode the
	 * content as JSON for the data field
	 * 
	 * @param	string	$data	raw unencoded data
	 */
	public function setDataAttribute($data)
	{
		$this->attributes['data'] = json_encode($data);
	}
	
	/******************/
	/* helper methods */
	/******************/
	
	// ...
	
	/**
	 * Find a job by its name or id.
	 * 
	 * @param  mixed  $key
	 * @param  array  $columns
	 * @return \Illuminate\Database\Eloquent\Model|Collection|static
	 */
	public static function findByIdOrName($key, $columns = array('*'))
	{
		$instance = new static;
		// return $instance->newQuery()->find($id, $columns);
		
		$builder = $instance->newEloquentBuilder($instance->newBaseQueryBuilder());
		// $builder = static::newQuery();
		
		// Create a query builder and set the model instance so the builder
		// can construct and execute queries against it.
		$builder->setModel($instance)->with($instance->with);
		// $builder->whereNull($instance->getQualifiedDeletedAtColumn());
		
		if (is_int($key) || ctype_digit($key))
		{
			return $builder->find($key, $columns);
		}
		else
		{
			// return $builder->get($columns)->where('name', $key);
			return $builder->first($columns)->where('name', $key);
		}
	}
}

?>
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
	 */
	protected $fillable	= array('*');
	
	/* Model Instance Variables */
	
	/**
	 * Cron Job ID (Primary Key)
	 * 
	 * @var	int
	 */
	public $id;
	
	/**
	 * Cron Job Name
	 * 
	 * @var	string
	 */
	public $name;
	
	/**
	 * Cron Job Data
	 * 
	 * @var	string
	 */
	public $data;
	
	/**
	 * Cron Job Type
	 * 
	 * @var	string
	 */
	public $type;
	
	/**********************
	 * Eloquent Relations *
	 **********************/
	
	// ...
	
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
	public static function find($key, $columns = array('*'))
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
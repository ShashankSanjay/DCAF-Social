<?php

use Illuminate\Database\Migrations\Migration;

class UpdateLocations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		if (!(Schema::hasColumn('Locations', 'location_of')))
		{
			Schema::table('Locations', function ($table)
			{
				//
				$table->integer('location_of');
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::table('Locations', function($table)
		{
		    $table->dropColumn('location_of');
		});
	}

}
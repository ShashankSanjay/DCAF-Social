<?php

use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Locations', function ($table)
		{
			//
			$table->increments('id');
			$table->bigInteger('FB_Location_ID')->unsigned();
			$table->string('country')->nullable;
			$table->string('city')->nullable;
			//$table->longitude;
			//$table->latitude;
			$table->integer('zip')->nullable;
			$table->string('state', 2)->nullable;
			$table->string('street')->nullable;
			$table->string('located_in')->nullable;
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Locations');
	}

}
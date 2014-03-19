<?php

use Illuminate\Database\Migrations\Migration;

class FBWhoDemographics extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Store number of interactions
		Schema::create('FB_Who_Demographics', function($table)
		{
			//
			
			$table->integer('placeholder');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('FB_Who_Demographics');
	}

}
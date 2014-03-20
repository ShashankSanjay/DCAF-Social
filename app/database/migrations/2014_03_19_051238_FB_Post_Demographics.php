<?php 

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class FBPostDemographics extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/**
		*	This table holds aggregate, or overview demographics for an object
		*/
		Schema::create('FB_Post_Demographics', function(Blueprint $table)
		{
			//
			$table->integer('Who');
			$table->integer('What');
			$table->integer('Where');
			$table->integer('When');
			$table->integer('Why');
			//$table->('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FB_Post_Demographics');
	}

}
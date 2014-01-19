<?php

use Illuminate\Database\Migrations\Migration;

class Networkauth extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('users', function($table)
		{
			//
			$table->string('facebookAuthToken');
			$table->string('twitterAuthToken');
			$table->string('googleAuthToken');
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
		Schema::table('users', function($table)
		{
			//
			$table->dropColumn('facebookAuthToken');
			$table->dropColumn('twitterAuthToken');
			$table->dropColumn('googleAuthToken');
		});
	}

}
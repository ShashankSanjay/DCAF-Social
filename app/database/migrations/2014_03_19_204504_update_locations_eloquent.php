<?php

use Illuminate\Database\Migrations\Migration;

class UpdateLocationsEloquent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Locations', function($table)
		{
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Locations', function($table)
		{
			$table->dropColumn('created_at', 'updated_at');
		});
	}

}
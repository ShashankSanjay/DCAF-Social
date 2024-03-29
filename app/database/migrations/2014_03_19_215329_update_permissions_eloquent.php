<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class UpdatePermissionsEloquent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!(Schema::hasColumn('permissions', 'created_at')))
		{
			Schema::table('permissions', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->timestamp('created_at');
				$table->timestamp('updated_at');
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
		Schema::table('permissions', function($table)
		{
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
		});
	}

}
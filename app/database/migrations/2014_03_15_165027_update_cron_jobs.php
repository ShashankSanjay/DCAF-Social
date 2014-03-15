<?php

use Illuminate\Database\Migrations\Migration;

class UpdateCronJobs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('cron_job', function($table) {
                    $table->string('type');
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
		$table->dropColumn('type');
	}

}
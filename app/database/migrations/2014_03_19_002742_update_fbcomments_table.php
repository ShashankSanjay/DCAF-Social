<?php

use Illuminate\Database\Migrations\Migration;

class UpdateFbcommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('FB_Comments', function($table)
		{
			$table->dropColumn('from');
			$table->bigInteger('f_bpost_id')->unsigned()->index()->nullable();
		});

		Schema::table('FB_Comments', function($table)
		{
			$table->foreign('f_bpost_id')->references('FB_Post_ID')->on('FB_Posts');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::table('FB_Comments', function($table)
		{
		    $table->dropForeign('fb_comments_f_bpost_id_foreign');
		});
	}

}
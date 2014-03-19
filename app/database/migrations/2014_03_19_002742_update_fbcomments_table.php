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
		    $table->dropColumn('fb_comments_fb_post_id');
		});
	}

}
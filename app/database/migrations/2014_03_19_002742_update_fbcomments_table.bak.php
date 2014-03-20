<?php 

use Illuminate\Database\Schema\Blueprint;

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
		Schema::table('FB_Comments', function(Blueprint $table)
		{
			$table->dropColumn('from');
			$table->bigInteger('post_id')->unsigned()->nullable();
		});

		Schema::table('FB_Comments', function(Blueprint $table)
		{
			$table->foreign('post_id')->references('FB_Post_ID')->on('FB_Posts');
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
		    $table->dropForeign('fb_comments_post_id_foreign');
		});
	}

}
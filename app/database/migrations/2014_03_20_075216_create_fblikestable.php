<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class CreateFblikestable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Likes', function(Blueprint $table)
		{
			$table->engine = 'INNODB';
			$table->bigInteger('FB_Like_ID')->unsigned()->primary();
			$table->bigInteger('object_id');
			$table->bigInteger('user_id')->unsigned();
			$table->string('type');		// page or post or commment
			//$table-> ;
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
		});

		Schema::table('FB_Likes', function(Blueprint $table)
		{
			$table->foreign('user_id')->references('FB_User_ID')->on('FB_Users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('FB_Likes', function(Blueprint $table)
		{
		    $table->dropForeign('fb_likes_user_id_foreign');
		});

		Schema::drop('FB_Likes');
	}

}
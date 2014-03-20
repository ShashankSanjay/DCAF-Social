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
			$table->increments('id');
			$table->bigInteger('liker_id')->unsigned();
			$table->bigInteger('liked_id');
			$table->string('liked_type', 7);		// page or post
			//$table-> ;
			$table->timestamp('created_at');
			$table->timestamp('updated_at');
		});

		Schema::table('FB_Likes', function(Blueprint $table)
		{
			$table->foreign('liker_id')->references('FB_User_ID')->on('FB_Users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if (Schema::hasColumn('FB_Likes', 'user_id'))
		{
			Schema::table('FB_Likes', function(Blueprint $table)
			{
			    $table->dropForeign('fb_likes_user_id_foreign');
			});
		}
		if (Schema::hasColumn('FB_Likes', 'liker_id'))
		{
			Schema::table('FB_Likes', function(Blueprint $table)
			{
			    $table->dropForeign('fb_likes_liker_id_foreign');
			});
		}
		Schema::drop('FB_Likes');
	}

}
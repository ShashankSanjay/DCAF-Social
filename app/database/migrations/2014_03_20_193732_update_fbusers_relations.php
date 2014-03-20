<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class UpdateFbusersRelations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (Schema::hasColumn('FB_Posts', 'from_user_id'))
		{
			Schema::table('FB_Posts', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->dropForeign('from_user_id_foreign');
				$table->dropForeign('to_user_id_foreign');
				$table->dropColumn('from_user_id');
				$table->dropColumn('to_user_id');
				$table->foreign('User_id')->references('FB_User_ID')->on('FB_Users');
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
		if (Schema::hasColumn('FB_Posts', 'User_id'))
		{
			Schema::table('FB_Posts', function(Blueprint $table)
			{
				$table->dropForeign('fb_posts_user_id_foreign');
			});
		}
	}

}
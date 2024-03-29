<?php 

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class PostLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Posts_Likes', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id');
            $table->bigInteger('liked')->unsigned();
            $table->bigInteger('liker')->unsigned();
            $table->timestamp('created_at');
			$table->timestamp('updated_at');
        });

        Schema::table('FB_Posts_Likes', function(Blueprint $table)
		{
			$table->foreign('liked')->references('FB_Post_ID')->on('FB_Posts');
            $table->foreign('liker')->references('FB_User_ID')->on('FB_Users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/*Schema::table('Posts_Likes', function(Blueprint $table)
		{
			$table->dropForeign('post_likes_liked_foreign');
            $table->dropForeign('post_likes_liker_foreign');
		});*/
		Schema::drop('FB_Posts_Likes');
	}

}
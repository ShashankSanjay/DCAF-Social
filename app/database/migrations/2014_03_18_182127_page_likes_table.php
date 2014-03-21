<?php 

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class PageLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('FB_Pages_Likes', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id');
            $table->bigInteger('liker_id')->unsigned();
            $table->bigInteger('liked_id')->unsigned();
            $table->timestamp('created_at');
			$table->timestamp('updated_at');
        });

        Schema::table('FB_Pages_Likes', function(Blueprint $table)
		{
			$table->foreign('liked_id')->references('FB_Page_ID')->on('FB_Pages');
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
		//
		/*Schema::table('FB_Page_Likes', function(Blueprint $table)
		{
			$table->dropForeign('page_likes_liker_foreign');
            $table->dropForeign('page_likes_liked_foreign');
		});*/
		Schema::drop('FB_Pages_Likes');
	}

}
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
		//
		Schema::create('Post_Likes', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id');
            $table->bigInteger('likee')->unsigned()->index();
            $table->bigInteger('liker')->unsigned()->index();
            $table->foreign('likee')->references('FB_Post_ID')->on('FB_Posts');
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
		//
		Schema::drop('Post_Likes');
	}

}
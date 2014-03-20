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
		Schema::create('Page_Likes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->bigInteger('likee')->unsigned()->index();
            $table->bigInteger('liker')->unsigned()->index();
            $table->foreign('likee')->references('FB_Page_ID')->on('FB_Pages');
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
		Schema::drop('Page_Likes');
	}

}
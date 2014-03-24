<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class CreatePostShares extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Posts_Shares', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id');
            $table->bigInteger('sharer')->unsigned()->nullable();
            $table->bigInteger('post_id')->unsigned()->nullable();
            $table->timestamp('created_at');
			$table->timestamp('updated_at');            
        });

        Schema::table('FB_Posts_Shares', function(Blueprint $table)
		{
			$table->foreign('post_id')->references('FB_Post_ID')->on('FB_Posts');
			$table->foreign('sharer')->references('FB_User_ID')->on('FB_Users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FB_Posts_Shares');
	}

}
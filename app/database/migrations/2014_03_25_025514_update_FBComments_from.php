<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class UpdateFBCommentsFrom extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('FB_Comments', function(Blueprint $table) 
		{
			$table->bigInteger('from')->unsigned()->nullable();
		});

		Schema::table('FB_Comments', function(Blueprint $table) 
		{
			$table->foreign('from')->references('FB_User_ID')->on('FB_Users');
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
	}

}
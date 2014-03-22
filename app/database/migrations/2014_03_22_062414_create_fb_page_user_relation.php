<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBPageUserRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Page_User', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
        	$table->increments('id');
            $table->bigInteger('FB_Page_ID')->unsigned();
            $table->bigInteger('FB_User_ID')->unsigned();
        });

        Schema::table('FB_Page_User', function(Blueprint $table)
		{
			$table->foreign('FB_Page_ID')->references('FB_Page_ID')->on('FB_Pages');
			$table->foreign('FB_User_ID')->references('FB_User_ID')->on('FB_Users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FB_Page_User');
	}

}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatTWUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
		Schema::create('TW_Users', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
        	$table->increments('id')->unique();
        });

        Schema::table('TW_Users', function(Blueprint $table)
        {
        	$table->dropPrimary('PRIMARY');
        	$table->bigInteger('TW_User_ID')->unsigned()->primary();
        	$table->string('name');
        	$table->string('screen_name');
        	//$table->;
        });
	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('TW_Users');
	}

}
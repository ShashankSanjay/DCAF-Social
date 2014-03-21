<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBPostWhoWhereWhenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Posts_WhoWhereWhen', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id')->unique();    
		});

		Schema::table('FB_Posts_WhoWhereWhen', function(Blueprint $table)
        {
        	$table->dropPrimary('PRIMARY');
            $table->bigInteger('FB_Post_ID')->unsigned()->primary();
            $table->integer('Male');
            $table->integer('Female');
            $table->integer('Age');
            $table->bigInteger('FB_Location_ID')->unsigned();
            $table->timestamp('time');
            $table->timestamp('created_at');
			$table->timestamp('updated_at');
		});

        Schema::table('FB_Posts_WhoWhereWhen', function(Blueprint $table)
		{
			$table->foreign('FB_Post_ID')->references('FB_Post_ID')->on('FB_Posts');
            $table->foreign('FB_Location_ID')->references('FB_Location_ID')->on('Locations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FB_Posts_WhoWhereWhen');
	}

}
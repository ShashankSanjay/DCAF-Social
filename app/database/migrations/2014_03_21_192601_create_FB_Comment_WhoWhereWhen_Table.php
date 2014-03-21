<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBCommentWhoWhereWhenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Comments_WhoWhereWhen', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id')->unique();    
		});

		Schema::table('FB_Comments_WhoWhereWhen', function(Blueprint $table)
        {
        	$table->dropPrimary('PRIMARY');
            $table->bigInteger('FB_Comment_ID')->unsigned()->primary();
            $table->integer('Male');
            $table->integer('Female');
            $table->integer('Age');
            $table->bigInteger('FB_Location_ID')->unsigned();
            $table->timestamp('time');
            $table->timestamp('created_at');
			$table->timestamp('updated_at');
        });

        Schema::table('FB_Comments_WhoWhereWhen', function(Blueprint $table)
		{
			$table->foreign('FB_Comment_ID')->references('FB_Comment_ID')->on('FB_Comments');
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
		Schema::drop('FB_Comments_WhoWhereWhen');
	}

}
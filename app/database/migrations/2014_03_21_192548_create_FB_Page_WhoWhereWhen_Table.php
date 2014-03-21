<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBPageWhoWhereWhenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Pages_WhoWhereWhen', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id')->unique();    
		});

		Schema::table('FB_Pages_WhoWhereWhen', function(Blueprint $table)
        {
        	$table->dropPrimary('PRIMARY');
            $table->bigInteger('Page_ID')->unsigned()->primary();
            $table->integer('Male');
            $table->integer('Female');
            $table->integer('Age');
            $table->bigInteger('Location_ID')->unsigned();
            $table->timestamp('time');
            $table->timestamp('created_at');
			$table->timestamp('updated_at');            
        });

        Schema::table('FB_Pages_WhoWhereWhen', function(Blueprint $table)
		{
			$table->foreign('Page_ID')->references('FB_Page_ID')->on('FB_Pages');
			$table->foreign('Location_ID')->references('FB_Location_ID')->on('Locations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FB_Pages_WhoWhereWhen');
	}

}
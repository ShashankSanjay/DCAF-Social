<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBPageWhatWhyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Pages_WhatWhy', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id')->unique();    
		});

		Schema::table('FB_Pages_WhatWhy', function(Blueprint $table)
        {
        	$table->dropPrimary('PRIMARY');
            $table->bigInteger('Page_ID')->unsigned()->primary();
            $table->decimal('Sentiment', 5, 3);		// In case posted by pg admin
            $table->string('Popular_Term_1');
            $table->string('Popular_Term_2');
            $table->string('Popular_Term_3');
            $table->integer('Popular_Post_1');
            $table->integer('Popular_Post_2');
            $table->integer('Popular_Post_3');
            $table->timestamp('created_at');
			$table->timestamp('updated_at');            
        });

        Schema::table('FB_Pages_WhatWhy', function(Blueprint $table)
		{
			$table->foreign('Page_ID')->references('FB_Page_ID')->on('FB_Pages');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FB_Pages_WhatWhy');
	}

}
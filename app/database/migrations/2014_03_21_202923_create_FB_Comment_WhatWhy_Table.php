<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFBCommentWhatWhyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Comments_WhatWhy', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id')->unique();
		});

		Schema::table('FB_Comments_WhatWhy', function(Blueprint $table)
        {
        	$table->dropPrimary('PRIMARY');
            $table->bigInteger('FB_Comment_ID')->unsigned()->primary();
            $table->decimal('Sentiment', 5, 3)->nullable();		// In case posted by pg admin
            $table->string('Popular_Term');
            $table->integer('Total_Number_Likes');
            $table->timestamp('created_at');
			$table->timestamp('updated_at');
        });

        Schema::table('FB_Comments_WhatWhy', function(Blueprint $table)
		{
			$table->foreign('FB_Comment_ID')->references('FB_Comment_ID')->on('FB_Comments');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('FB_Comments_WhatWhy');
	}

}
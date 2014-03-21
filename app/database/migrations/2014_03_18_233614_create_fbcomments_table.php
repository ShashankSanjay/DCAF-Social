<?php 

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class CreateFbcommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('FB_Comments', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id')->unique();
		});

		Schema::table('FB_Comments', function(Blueprint $table)
		{
        	$table->dropPrimary('PRIMARY');
			$table->bigInteger('FB_Comment_ID')->unsigned()->primary();
			$table->integer('attachment_id')->nullable();
			$table->integer('comment_count');
			$table->timestamp('created_time');
			$table->bigInteger('from'); //user_id of author
			$table->integer('like_count');
			$table->string('message');
			$table->integer('message_tags');
			$table->integer('parent')->nullable();
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
		Schema::drop('FB_Comments');
	}

}
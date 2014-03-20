<?php 

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class FBWhoDemographics extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Store number of interactions
		Schema::create('FB_Who_Demographics', function(Blueprint $table)
		{
			$table->engine = 'INNODB';
			$table->integer('M_likes');
			$table->integer('F_likes');
			$table->integer('M_shares');
			$table->integer('F_shares');
			$table->integer('M_comments');
			$table->integer('F_comments');
			$table->bigInteger('fb_post_id')->unsigned()->index()->nullable();

		});

		Schema::table('FB_Who_Demographics', function(Blueprint $table)
		{
			
			$table->foreign('fb_post_id')->references('FB_Post_ID')->on('FB_Posts');
			
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
		Schema::drop('FB_Who_Demographics');
	}

}

?>
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
			$table->bigInteger('post_id')->unsigned()->nullable();
			$table->bigInteger('page_id')->unsigned()->nullable();

		});

		Schema::table('FB_Who_Demographics', function(Blueprint $table)
		{
			$table->foreign('post_id')->references('FB_Post_ID')->on('FB_Posts');
			$table->foreign('page_id')->references('FB_Page_ID')->on('FB_Pages');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::dropForeign('fb_who_demographics_post_id_foreign');
		//Schema::dropForeign('fb_who_demographics_page_id_foreign');
		Schema::drop('FB_Who_Demographics');
	}

}

?>
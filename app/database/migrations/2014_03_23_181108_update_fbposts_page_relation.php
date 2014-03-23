<?php

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class UpdateFbpostsPageRelation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!(Schema::hasColumn('FB_Posts', 'Page_id')))
		{
			Schema::table('FB_Posts', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->bigInteger('Page_id')->unsigned();
				
			});
		}

		Schema::table('FB_Posts', function(Blueprint $table)
		{
			$table->foreign('Page_id')->references('FB_Page_ID')->on('FB_Pages');
		});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('FB_Posts', function($table)
		{
			$table->dropForeign('fb_posts_page_id_foreign');
		});
	}

}
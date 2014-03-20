<?php 


use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;


class UpdateFbtablesLocations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//	Users
		if (Schema::hasColumn('FB_Users', 'hometown'))
		{
			Schema::table('FB_Users', function(Blueprint $table)
			{
				$table->dropColumn('hometown', 'location');
			});
		}

		Schema::table('FB_Users', function(Blueprint $table)
		{
			$table->bigInteger('hometown')->unsigned()->nullable();
			$table->bigInteger('location')->unsigned()->nullable();
			//$table->foreign('hometown')->references('id')->on('Locations');
            //$table->foreign('location')->references('id')->on('Locations');
        });

        Schema::table('FB_Users', function(Blueprint $table)
		{
			$table->foreign('hometown')->references('FB_Location_ID')->on('Locations');
            $table->foreign('location')->references('FB_Location_ID')->on('Locations');
        });

		//	Pages
		if (Schema::hasColumn('FB_Pages', 'location'))
		{
			Schema::table('FB_Pages', function(Blueprint $table)
			{
				$table->dropColumn('location');
				
			});
		}
		Schema::table('FB_Pages', function(Blueprint $table)
		{
			$table->bigInteger('location')->unsigned()->nullable();
            //$table->foreign('location')->references('id')->on('Locations');
		});

		Schema::table('FB_Pages', function(Blueprint $table)
		{
			$table->foreign('location')->references('FB_Location_ID')->on('Locations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		if (Schema::hasColumn('FB_Users', 'hometown'))
		{
			Schema::table('FB_Users', function($table)
			{
				$table->dropForeign('fb_users_hometown_foreign');
				$table->dropForeign('fb_users_location_foreign');
			});
		}

		if (Schema::hasColumn('FB_Pages', 'location'))
		{
			Schema::table('FB_Pages', function($table)
			{
				$table->dropForeign('fb_pages_location_foreign');
			});
		}
	}

}
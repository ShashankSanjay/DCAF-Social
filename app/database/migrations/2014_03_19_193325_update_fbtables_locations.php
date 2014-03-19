<?php

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
			Schema::table('FB_Users', function($table)
			{
				$table->dropColumn('hometown', 'location');
			});
		}

		Schema::table('FB_Users', function($table)
		{
			$table->integer('hometown');//->unsigned();//->index();
			$table->integer('location');//->unsigned();//->index();
			//$table->foreign('hometown')->references('id')->on('Locations');
            //$table->foreign('location')->references('id')->on('Locations');
        });

		//	Pages
		if (Schema::hasColumn('FB_Pages', 'location'))
		{
			Schema::table('FB_Pages', function($table)
			{
				$table->dropColumn('location');
				
			});
		}
		Schema::table('FB_Pages', function($table)
		{
			$table->integer('location');//->unsigned();//->index();
            //$table->foreign('location')->references('id')->on('Locations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/*
		if (Schema::hasColumn('FB_Users', 'hometown'))
		{
			Schema::table('FB_Users', function($table)
			{
				$table->dropForeign('hometown');
				$table->dropForeign('location');
			});
		}

		if (Schema::hasColumn('FB_Pages', 'location'))
		{
			Schema::table('FB_Pages', function($table)
			{
				$table->dropForeign('location');
			});
		}*/
	}

}
<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbUpdates extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!(Schema::hasColumn('Billing_Plans', 'duration')))
		{
			Schema::table('Billing_Plans', function(Blueprint $table)
	        {
	        	//$table->engine = 'INNODB';
	        	$table->integer('duration')->after('payment_frequency');
	        });
		}

		if (!(Schema::hasColumn('User_Profiles', 'created_at')))
		{
	        Schema::table('User_Profiles', function(Blueprint $table)
			{
				$table->timestamp('created_at');
				$table->timestamp('updated_at');
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
		//Schema::drop('FB_Page_User');
	}

}
<?php 

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class UpdateFbtablePerEloquent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*
		*	created_at's
		*/
		if (!(Schema::hasColumn('FB_Users', 'created_at')))
		{
		    Schema::table('FB_Users', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->timestamp('created_at');
			});
		}
		if (!(Schema::hasColumn('FB_Pages', 'created_at')))
		{
		    Schema::table('FB_Pages', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->timestamp('created_at');
			});
		}
		if (!(Schema::hasColumn('FB_Posts', 'created_at')))
		{
		    Schema::table('FB_Posts', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->timestamp('created_at');
			});
		}
		if (!(Schema::hasColumn('FB_Comments', 'created_at')))
		{
		    Schema::table('FB_Comments', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->timestamp('created_at');
			});
		}
		
		/*
		*	updated_at's
		*/
		if (!(Schema::hasColumn('FB_Users', 'updated_at')))
		{
		    Schema::table('FB_Users', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->timestamp('updated_at');
			});
		}
		if (!(Schema::hasColumn('FB_Pages', 'updated_at')))
		{
		    Schema::table('FB_Pages', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->timestamp('updated_at');
			});
		}
		if (!(Schema::hasColumn('FB_Posts', 'updated_at')))
		{
		    Schema::table('FB_Posts', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
				$table->timestamp('updated_at');
			});
		}
		if (!(Schema::hasColumn('FB_Comments', 'updated_at')))
		{
		    Schema::table('FB_Comments', function(Blueprint $table)
			{
				$table->engine = 'INNODB';
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
		Schema::table('FB_Users', function($table)
		{
			//
		});
		Schema::table('FB_Pages', function($table)
		{
			//
		});
		Schema::table('FB_Posts', function($table)
		{
			//
		});
		/*Schema::table('', function($table)
		{
			//
		});*/
	}

}
<?php 

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Locations', function(Blueprint $table)
        {
        	$table->engine = 'INNODB';
            $table->increments('id')->unique();    
		});

		Schema::table('Locations', function(Blueprint $table)
		{
        	$table->dropPrimary('PRIMARY');
			$table->bigInteger('FB_Location_ID')->unsigned()->primary();			
			$table->string('country')->nullable;
			$table->string('city')->nullable;
			//$table->longitude;
			//$table->latitude;
			$table->integer('zip')->nullable;
			$table->string('state', 2)->nullable;
			$table->string('street')->nullable;
			$table->string('located_in')->nullable;
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Locations');
	}

}
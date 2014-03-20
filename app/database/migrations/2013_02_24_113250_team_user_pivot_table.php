<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TeamUserPivotTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates the DCAF_Team_User (Many-to-Many relation) table
        Schema::create('DCAF_Team_User', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('dcaf_team_id')->unsigned()->index();
            $table->integer('dcaf_user_id')->unsigned()->index();
            $table->unique(array('dcaf_team_id','dcaf_user_id'));
            $table->foreign('dcaf_team_id')->references('id')->on('DCAF_Teams');
            $table->foreign('dcaf_user_id')->references('id')->on('DCAF_Users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('DCAF_Team_User');
        
    }

}

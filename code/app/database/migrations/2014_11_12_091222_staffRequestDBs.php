<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StaffRequestDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('staffRequestDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
            $table->string('userID');
            $table->string('requestID');
			$table->timestamps();
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
		Schema::drop('staffRequestDBs');
	}

}

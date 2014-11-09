<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerServiceDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('customerServiceDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
			$table->integer('userID');
			$table->integer('cleanReqID');
			$table->integer('mealReqID');
			$table->integer('room'); 
			$table->boolean('state');
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
		Schema::drop('customerServiceDBs');
	}

}

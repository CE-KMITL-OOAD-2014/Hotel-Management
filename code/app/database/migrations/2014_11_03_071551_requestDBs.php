<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RequestDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('requestDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
			$table->string('type');
			$table->string('room');
			$table->string('billNumber');
			$table->string('customerServiceID');
			$table->string('state');
			$table->string('mealID');
			$table->string('date');
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
		Schema::drop('requestDBs');
	}

}

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
			$table->integer('type');
			$table->integer('room');
			$table->integer('billNumber');
			$table->integer('customerServiceID');
			$table->integer('state');
			$table->string('comment');
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

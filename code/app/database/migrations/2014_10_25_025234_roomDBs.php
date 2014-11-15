<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoomDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('roomDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
			$table->string('roomNumber',10);
			$table->integer('price');
			$table->integer('bed');
			$table->string('roomType',100);
			$table->boolean('available');
            $table->timestamps();
 
            $table->unique('roomnumber');
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
		Schema::drop('roomDBs');
	}

}

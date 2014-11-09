<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StaffDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('staffDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
            $table->integer('userID');
            $table->string('staffID', 64);
            $table->string('name', 100);
            $table->string('IDnumber', 100);
            $table->string('location', 64);
            $table->string('email', 64);
            $table->string('tel', 64);
            $table->timestamps();
 
            $table->unique('staffID');
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
		Schema::drop('staffDBs');
	}

}

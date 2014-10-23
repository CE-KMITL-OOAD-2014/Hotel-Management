<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //Create table
        Schema::create('users', function($table)
        {
            //Set engine
            $table->engine = 'InnoDB';
 
            //Create fields
            $table->increments('id');
            $table->string('username', 64);
            $table->string('password', 64);
            $table->string('role',64);
            $table->timestamps();
 
            //Create index
            $table->unique('username');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Drop table
        Schema::drop('users');
	}

}

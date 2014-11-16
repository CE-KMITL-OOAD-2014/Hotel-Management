<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GlobalDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('globalDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
            $table->string('name');
			$table->integer('data');
            $table->timestamps();

            $table->unique('name');
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
		Schema::drop('globalDBs');
	}

}

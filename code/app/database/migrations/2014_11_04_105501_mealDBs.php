<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MealDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('mealDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
            $table->string('name');
            $table->string('pic');
            $table->string('desc');
			$table->integer('price');
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
		Schema::drop('mealDBs');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('customerDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
			$table->integer('billNumber');
			$table->string('name');
			$table->string('surname');
			$table->integer('nationalID');
			$table->string('detail');
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
		Schema::drop('customerDBs');
	}

}

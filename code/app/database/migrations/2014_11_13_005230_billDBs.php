<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillDBs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() 
	{
		//
		Schema::create('billDBs', function($table)
        {
            $table->engine = 'InnoDB';
 
            $table->increments('id');
            $table->string('billNumber');
           	$table->string('type');
            $table->string('detail');
            $table->integer('value');
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
		Schema::drop('billDBs');
	}

}

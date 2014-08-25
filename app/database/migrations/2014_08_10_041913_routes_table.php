<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('routes',function($table){
			$table->increments('id');
			$table->string('route_code')->unique();
			$table->string('route_name');
			$table->integer('location_id')->unsigned();
			$table->foreign('location_id')->references('id')->on('locations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */ 	
	public function down()
	{
		Schema::dropIfExists('routes');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserLocationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_location',function($table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->integer('location_id')->unsigned();
			$table->timeStamps();
			/*Adding basic indeces*/
			$table->index('user_id');
			$table->index('location_id');
			/*Foreign Keys*/
			$table->foreign('user_id')->references('id')->on('users');
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
		Schema::dropIfExists('user_location_table');
	}

}

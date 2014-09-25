<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LogsTable extends Migration {

	/**
	 * Run the migrations.
	 *bl
	 
	 * @return void
	 */
	public function up()
	{
		Schema::create('logs',function($table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->boolean('status');
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
		Schema::dropIfExists('logs');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts',function($table){
			$table->increments('id');
			$table->string('account_number')->unique();
			$table->string('meter_number');
			$table->integer('user_id')->unsigned();
			$table->integer('route_id')->unsigned();
			$table->string('billing_address');
			$table->decimal('current_reading',10,5);
			$table->decimal('previous_reading',10,5);
			$table->boolean('status');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('route_id')->references('id')->on('routes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('accounts');
	}

}

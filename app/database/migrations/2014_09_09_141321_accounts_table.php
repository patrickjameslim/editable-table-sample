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
			$table->integer('location_id')->unsigned();
			$table->string('billing_address');
			$table->decimal('currentReading',10,5);
			$table->decimal('previousReading',10,5);

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
		Schema::dropIfExists('accounts');
	}

}

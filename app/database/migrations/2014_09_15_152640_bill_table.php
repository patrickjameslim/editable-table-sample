<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BillTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bills',function($table){
			$table->increments('id');
			$table->integer('account_id')->unsigned();
			$table->string('oebr_number');
			$table->string('current_bill_amount');
			$table->date('start_date');
			$table->date('end_date');
			$table->string('bill_status');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('bills');
	}

}

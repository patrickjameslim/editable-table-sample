<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		 $this->call('GroupTableSeeder');
		 $this->call('UserTableSeeder');
		 $this->call('WheelingRatesSeeder');
		 $this->call('LocationTableSeeder');
		 $this->call('RoutesTableSeeder');
		 $this->call('UserLocationTableSeeder');
		 $this->call('AccountTableSeeder');
	}

}

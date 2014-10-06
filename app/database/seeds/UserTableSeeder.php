<?php
class UserTableSeeder extends Seeder{

	public function run(){
		DB::table('users')->delete();
		//create accounts

		$user = Sentry::register(array(
			'username' => 'sysadmin',
			'password' => 'sysadmin',
			'activated' => '1',
			'first_name' => 'JM',
			'last_name' => 'Ramos',
			'address' => '110 Brgy Coloong II Valenzuela City',
			'contact_number' => '09054704478',
		));

		$group = Sentry::findGroupByName('System Admin');
		$user->addGroup($group);

		$user = Sentry::register(array(
			'username' => 'cashier',
			'password' => 'cashier',
			'activated' => '1',
			'first_name' => 'Patrick James',
			'last_name' => 'Lim',
			'address' => '47 Dr. Pio Valenzuela St. BBB Valenzuela City',
			'contact_number' => '09158902345',
		));

		$group = Sentry::findGroupByName('Cashier');
		$user->addGroup($group);
		
		$user = Sentry::register(array(
			'username' => 'manager',
			'password' => 'manager',
			'activated' => '1',
			'first_name' => 'John Benedic',
			'last_name' => 'Enriquez',
			'address' => '97 Mahalimuyak St. New York Cubao, Quezon City',
			'contact_number' => '091789152942',
		));

		$group = Sentry::findGroupByName('Area Manager');
		$user->addGroup($group);

		$user = Sentry::register(array(
			'username' => 'cad-1',
			'password' => 'cad-1',
			'activated' => '1',
			'first_name' => 'Juan',
			'last_name' => 'Dela Cruz',
			'address' => '43 Maligaya St. Pasig City',
			'contact_number' => '09064404178',
		));

		$group = Sentry::findGroupByName('Consumers Area Department');
		$user->addGroup($group);

		$user = Sentry::register(array(
			'username' => 'personnel',
			'password' => 'personnel',
			'activated' => '1',
			'first_name' => 'Beverly',
			'last_name' => 'Hills',
			'address' => '4 Laon Laan 3rd Avenue Caloocan City',
			'contact_number' => '09054704478',
		));

		$group = Sentry::findGroupByName('IT Personnel');
		$user->addGroup($group);

		$user = Sentry::register(array(
			'username' => 'consumer1',
			'password' => 'consumer1',
			'activated' => '1',
			'first_name' => 'Magzz',
			'last_name' => 'Tapel',
			'address' => 'Sa likod ng puregold',
			'contact_number' => '09054704478',
		));

		$group = Sentry::findGroupByName('Consumer');
		$user->addGroup($group);

		$user = Sentry::register(array(
			'username' => 'consumer2',
			'password' => 'consumer2',
			'activated' => '1',
			'first_name' => 'Jinver',
			'last_name' => 'Baba',
			'address' => 'Sa gilid ng baste',
			'contact_number' => '09054704478',
		));

		$group = Sentry::findGroupByName('Consumer');
		$user->addGroup($group);
	
	}
}
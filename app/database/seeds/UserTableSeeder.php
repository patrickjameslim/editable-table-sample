<?php
class UserTableSeeder extends Seeder{

	public function run(){
		DB::table('users')->delete();
		//create accounts

		$user = Sentry::register(array(
			'username' => 'sysadmin',
			'email' => '',
			'password' => 'sysadmin',
			'activated' => '1',
			'first_name' => 'JM',
			'last_name' => 'Ramos'
		));

		$group = Sentry::findGroupByName('System Admin');
		$user->addGroup($group);

		$user = Sentry::register(array(
			'username' => 'cashier',
			'email' => 'jmjm@username.com',
			'password' => 'cashier',
			'activated' => '1',
			'first_name' => 'Patrick James',
			'last_name' => 'Lim'
		));

		$group = Sentry::findGroupByName('Cashier');
		$user->addGroup($group);
		
		$user = Sentry::register(array(
			'username' => 'manager',
			'email' => 'lolo@gmail.com',
			'password' => 'manager',
			'activated' => '1',
			'first_name' => 'John Benedic',
			'last_name' => 'Enriquez'
		));

		$group = Sentry::findGroupByName('Area Manager');
		$user->addGroup($group);
	}
}
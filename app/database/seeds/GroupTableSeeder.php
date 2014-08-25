<?php
class GroupTableSeeder extends Seeder{

	public function run(){
		//delete first any existing groups
		DB::table('groups')->delete();

		//add now all the groups

		Sentry::createGroup(array(
			'name' => 'Consumer',
			'permissions' => array(
				'consumer' => 1
			)
		));
		Sentry::createGroup(array(
			'name' => 'Cashier',
			'permissions' => array(
				'cashier' => 1
			)
		));
		Sentry::createGroup(array(
			'name' => 'Area Manager',
			'permissions' => array(
				'manager' => 1
			)
		));
		Sentry::createGroup(array(
			'name' => 'IT Personnel',
			'permissions' => array(
				'personnel' => 1
			)
		));
		Sentry::createGroup(array(
			'name' => 'Consumers Area Department',
			'permissions' => array(
				'cad' => 1
			)
		));
		Sentry::createGroup(array(
			'name' => 'System Admin',
			'permissions' => array(
				'admin' => 1
			)
		));
		Sentry::createGroup(array(
			'name' => 'Collector',
			'permissions' => array(
				'collector' => 1
			)
		));
	}
}
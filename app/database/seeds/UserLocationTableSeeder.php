<?php

class UserLocationTableSeeder extends Seeder {
	public function run(){
		$user_location = new UserLocation();
		$user_location->user_id = 3;
		$user_location->location_id = 1;
		$user_location->save();

	}
}
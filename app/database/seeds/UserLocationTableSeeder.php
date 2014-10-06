<?php

class UserLocationTableSeeder extends Seeder {
	public function run(){
		$user_location = new UserLocation();
		$user_location->user_id = 3;
		$user_location->location_id = 1;
		$user_location->save();

		$user_location = new UserLocation();
		$user_location->user_id = 1;
		$user_location->location_id = 2;
		$user_location->save();

		$user_location = new UserLocation();
		$user_location->user_id = 2;
		$user_location->location_id = 1;
		$user_location->save();

		$user_location = new UserLocation();
		$user_location->user_id = 7;
		$user_location->location_id = 1;
		$user_location->save();

		$user_location = new UserLocation();
		$user_location->user_id = 6;
		$user_location->location_id = 1;
		$user_location->save();



	}
}
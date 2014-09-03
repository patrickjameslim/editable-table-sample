<?php
class LocationTableSeeder extends Seeder{
	public function run(){
		$results = Excel::load('location.csv',function($reader){
			
		})->get()->toArray();
		
		foreach($results as $result){
			$location = new Location();
			$location->district = $result['district'];
			$location->location_name = $result['location_name'];
			$location->save();
		}
	}
}
<?php
class LocationTableSeeder extends Seeder{
	public function run(){
		Excel::load('location.csv',function($reader){
			$reader->each(function($sheet) {
		    	$sheet->each(function($row) {
		    		$location = new Location();
		    		$location->district = $row['district'];
		    		$location->location_name = $row['location_name'];
		    		$location->save();
		    	});
			});
		});
	}
}
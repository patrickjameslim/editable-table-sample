<?php
class RoutesTableSeeder extends Seeder{
	public function run(){
		$results = Excel::load('routes.csv',function($reader){
			
		})->get()->toArray();
		
		foreach($results as $result){
			$route = new QRoute();
			$route->route_code = $result['route_code'];
			$route->route_name = $result['route_name'];
			$route->location_id = $result['location_id'];
			$route->save();
		}
	}
}
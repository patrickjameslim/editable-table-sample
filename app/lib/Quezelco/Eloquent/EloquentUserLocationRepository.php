<?php
namespace Quezelco\Eloquent;

use UserLocation;
use Quezelco\Interfaces\UserLocationRepository;

class EloquentUserLocationRepository implements UserLocationRepository{
	public function addToLocation($user_id , $location_id){
		$userLocation = new UserLocation();
		$userLocation->user_id = $user_id;
		$userLocation->location_id = $location_id;

		$userLocation->save();
	}
}
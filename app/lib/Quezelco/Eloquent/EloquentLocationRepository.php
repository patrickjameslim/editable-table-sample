<?php
 namespace Quezelco\Eloquent;
 use Location;
 use Quezelco\Interfaces\LocationRepository;
 
 class EloquentLocationRepository implements LocationRepository{

 	private $recordsPerPage = 10;
 	
 	public function find($id){
 		return Location::find($id);
 	}

 	public function all(){
 		return Location::paginate($this->recordsPerPage);
 	}

 	public function add($inputs){
 		$location = new Location();
 		$location->district = strtoupper($inputs['district_name']);
 		$location->location_name = strtoupper($inputs['location_name']);
 		$location->save();
 	}

 	public function update($location){
 		$location->save();
 	}

 	public function delete($location){
 		$location->delete();
 	}

 	public function getRoutes($location){
 		return $location->routes()->paginate($this->recordsPerPage);
 	}

 	public function search($searchKey){
 		return Location::where('location_name','like',"%$searchKey%")->paginate(10);
 	}

 	public function paginate($location){
 		return $location->paginate($this->recordsPerPage);
 	}
 }
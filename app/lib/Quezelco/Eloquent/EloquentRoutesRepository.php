<?php
namespace Quezelco\Eloquent;

use QRoute;
use Quezelco\Interfaces\RoutesRepository;

 class EloquentRoutesRepository implements RoutesRepository {

 	private $recordsPerPage = 20;
 	
 	public function find($id){
 		return QRoute::find($id);
 	}

 	public function all(){
 		return QRoute::paginate($this->recordsPerPage);
 	}

 	public function delete($route){
 		$route->delete();
 	}

 	public function create($inputs){
 		$route = new QRoute();
 		$route->route_code = $inputs['route_code'];
 		$route->route_name = $inputs['route_name'];
 		$route->location_id = $inputs['location_id'];

 		$route->save();
 	}

 	public function update($route){
 		$route->save();
 	}

 	public function search($searchKey){
 		$newKey = "%$searchKey%";
 		return QRoute::whereRaw('route_code LIKE ? OR route_name LIKE ?',array($newKey, $newKey))->paginate(10);
 	}

 	public function paginate($routes){
 		$routes->paginate($this->recordsPerPage);
 	} 

 	public function getLocation($route){
 		return $route->location();
 	}

 }
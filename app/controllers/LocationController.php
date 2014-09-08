<?php

use Quezelco\Interfaces\LocationRepository as Location;

class LocationController extends \BaseController {

	public function __construct(Location $location){
		$this->location = $location;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$locations = $this->location->getAllPaginated();
		return View::make('admin.location.index')->with('locations',$locations);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		/*$districtName = Input::get('district_name');
		$locationName = Input::get('location_name');*/

		$rules = array('district_name' => 'required',
					   'location_name' => 'required');
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('admin/location')->withErrors($validator)->withInput(Input::all());
		}else{
			$this->location->add(Input::all(),$rules);
			Session::flash('message','Location Created Successfuly');
			return Redirect::to('admin/location/');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$location = $this->location->find($id);
		$routes = $this->location->getRoutes($location);
		$message = "Showing Routes for Location: " . $location->location_name;
		Session::flash('message',$message);
		return View::make('admin.location.show')->with('routes',$routes);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$location = $this->location->find($id);
		return View::make('admin.location.edit')->with('location',$location);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$rules = array('district' => 'required',
					   'location_name' => 'required');
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('admin/location/' . $id . '/edit')->withErrors($validator);
		}else{
			$location = $this->location->find($id);
			$location->district = strtoupper(Input::get('district'));
			$location->location_name = strtoupper(Input::get('location_name'));
			$this->location->update($location);

			Session::flash('message','Location Updated Successfuly');
			return Redirect::to('admin/location/');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function search(){
		$searchKey = Input::get('search_key');
		$result = $this->location->search($searchKey);

		return View::make('admin.location.index')->with('locations',$result);
	}

}

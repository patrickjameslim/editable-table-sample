<?php

use Quezelco\Interfaces\AccountRepository as Account;
use Quezelco\Interfaces\LocationRepository as Location;
use Quezelco\Interfaces\UserRepository as User;
use Quezelco\Interfaces\UserLocationRepository as UserLocation;

class CustomerController extends \BaseController {

	public function __construct(Account $account, Location $location, User $user, UserLocation $userLocation){

		$this->user_location = $userLocation;
		$this->account = $account;
		$this->location = $location;
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$accounts = $this->account->paginate();
		return View::make('admin.customer.index')->with('accounts',$accounts);
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

		$id = Session::get('user_id');
		$rules = array('account_number' => 'required|unique:accounts',
						'meter_number' => 'required',
						'billing_address' => 'required');
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('admin/add-account/' . $id)->withErrors($validator);
		}else{
			$user = $this->user->find($id);
			$this->account->addAccountToConsumer($user, Input::all());

			return Redirect::to('admin/account');
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

	public function showCreateForm($id){
		Session::forget('user_id');
		Session::put('user_id',$id);
		$user = $this->user->find($id);
		$user_location = $this->user_location->findByUser($user);
		$routes = $this->location->getAllRoutes($user_location[0]->location_id);
		$arrayRoute = array();
		foreach ($routes as $route) {
			$arrayRoute[$route->id] = $route->route_name; 
		}
		return View::make('admin.customer.add')->with('routes',$arrayRoute);
	}

	public function saveAccount($id){

	}

	public function search(){
		$searchKey = Input::get('search_key');
		$accounts = $this->account->search($searchKey);
		return View::make('admin.customer.index')->with('accounts',$accounts);
	}


}

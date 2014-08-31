<?php

use Quezelco\Interfaces\UserRepository as User;
use Quezelco\Interfaces\GroupRepository as Group;
use Quezelco\Interfaces\AuthRepository as Auth;
use Quezelco\Interfaces\RatesRepository as Rates;

class AdminController extends BaseController{
	private $consumerRole = "Consumer";

	public function __construct(User $user, Group $group, Auth $auth, Rates $rates){
		$this->user = $user;
		$this->group = $group;
		$this->auth = $auth;
		$this->rates = $rates;
	}

	public function showIndex(){
		return View::make('admin.index');
	}

	public function showCashier(){
		return View::make('admin.cashier');
	}

	public function showAddCustomer(){
		return View::make('admin.add-customer');
	}

	public function showDisconnectedBills(){
		return View::make('admin.disconnected-bills');
	}

	public function showBilling(){
		return View::make('admin.billing');
	}

	public function showReports(){
		return View::make('admin.report');
	}

	public function showUserMaintenance(){
		$users = $this->user->paginate(10);
		return View::make('admin.user-maintenance')->with('users', $users);
	}

	public function showWheelingRates(){
		$rate = $this->rates->getRates();
		return View::make('admin.wheeling-rates')->with('rates',$rate);
	}

	/*User Maintenance*/
	public function showAddUser(){
		$roles = $this->group->all();
		$arrayRole = array();
		foreach ($roles as $role) {
			if($role->name != $this->consumerRole){
				$arrayRole[$role->id] = $role->name; 
			}
		}
		return View::make('admin.add-user')->with('roles',$arrayRole);
	}

	public function saveUser(){
		$validator = $this->user->validate(Input::all());
		if($validator->fails()){
			return Redirect::to('admin/add-user')->withErrors($validator)->withInput(Input::all());
		}else{
			//saving if validation is successful
			$user = $this->auth->register(Input::all()); 
			$group = $this->auth->findGroupById(Input::get('role'));
			$user->addGroup($group);
			//return to User-Maintenance Form
			$roles = $this->group->all();
			$arrayRole = array();
			Session::flash('message','User Created Successful');
			return Redirect::to('admin/user-maintenance');
		}
	}

	public function searchUser(){
		$search_key = Input::get('search_key');
		if($search_key == ''){
			$users = $this->user->paginate(10);
		}else{
			$users = $this->user->advanceSearch($search_key);
		}
		return View::make('admin.user-maintenance')->with('users', $users);
	}
	public function showEditUser($search_key){
		$user = $this->auth->find($search_key);
		return View::make('admin.edit-user')->with('user',$user);
	}
	public function modifyUser($id){
		$user = $this->user->find($id);
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->address = Input::get('address');
		$user->contact_number = Input::get('contact_number');
		$validator = $this->user->validateEdit(Input::all());
		if($validator->fails()){
			return Redirect::to('admin/edit-user/' . $id)->withErrors($validator)->withInput(Input::all());
		}else{
			//saving if validation is successful
			$this->user->update($user);
			Session::flash('message','User Modified Successful');
			return Redirect::to('admin/user-maintenance');
		}
	}
	public function activation($id){
		$user = $this->auth->find($id);
		if($user->activated == 0){
			$user->activated = 1;
		}else{
			$user->activated = 0;
		}
		$user->save();
		return Redirect::to('admin/user-maintenance');
	}

	/*Wheeling Rates*/

	public function saveWheelingRates(){
		$validator = $this->rates->validate(Input::all());
		if($validator->fails()){
			return Redirect::to('admin/wheeling-rates')->withErrors($validator)->withInput(Input::all());
		}else{
			$this->rates->update(Input::all());
		}
		return Redirect::to('admin/wheeling-rates');
	}
}
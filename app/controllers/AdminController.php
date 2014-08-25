<?php
class AdminController extends BaseController{

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
		$users = User::paginate(10);
		return View::make('admin.user-maintenance')->with('users', $users);
	}

	public function showWheelingRates(){
		return View::make('admin.wheeling-rates');
	}

	public function showAddUser(){
		$roles = Group::all();
		$arrayRole = array();
		foreach ($roles as $role) {
			$arrayRole[$role->id] = $role->name; 
	}
		return View::make('admin.add-user')->with('roles',$arrayRole);
	}

	public function saveUser(){
		$user = new User();
		$user->firstname = Input::get('first_name');
		$user->last_name = Input::get('last_name');
	}
}
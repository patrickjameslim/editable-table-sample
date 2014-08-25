<?php
class AdminController extends BaseController{
	private $consumerRole = "Consumer";

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
			if($role->name != $this->consumerRole){
				$arrayRole[$role->id] = $role->name; 
			}
		}
		return View::make('admin.add-user')->with('roles',$arrayRole);
	}

	public function saveUser(){
		//validation
		$user = new User();
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->address = Input::get('address');
		$user->contact_number = Input::get('contact_number');
		$rules = array(
			'username' => 'required|min:5|unique:users',
			'password' => 'required|confirmed|min:5',
			'address' => 'required',
			'first_name' => 'required',
			'last_name' => 'required'
		);
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('admin/add-user')->withErrors($validator)->withInput(Input::all());
		}else{
			//saving if validation is successful
			$user = Sentry::register(array(
				'username' => Input::get('username'),
				'address' => Input::get('address'),
				'password' => Input::get('password'),
				'activated' => '1',
				'first_name' => Input::get('first_name'),
				'last_name' => Input::get('last_name'),
				'contact_number' => Input::get('contact_number')
			));

			$group = Sentry::findGroupById(Input::get('role'));
			$addGroup($group);

			//return to User-Maintenance Form
		}
		
	}
}
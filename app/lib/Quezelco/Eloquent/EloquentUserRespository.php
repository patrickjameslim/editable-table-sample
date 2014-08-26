<?php
namespace Quezelco\Eloquent;

use User;
use Validator;
use Quezelco\Interfaces\UserRepository;

class EloquentUserRepository implements UserRepository{
	public function all(){
		return User::all();
	}

	public function find($id){
		return User::find($id);
	}

	public function findByUsername($username){
		return User::where('username','=',$username);
	}

	public function paginate($pages){
		return User::paginate($pages);
	}

	public function validate($inputs){
		$rules = array(
			'username' => 'required|min:5|unique:users',
			'password' => 'required|confirmed|min:5',
			'address' => 'required',
			'first_name' => 'required',
			'last_name' => 'required'
		);

		return Validator::make($inputs,$rules);
	}

	public function validateEdit($inputs){
		$rules = array(
			'address' => 'required',
			'first_name' => 'required',
			'last_name' => 'required'
		);
		return Validator::make($inputs,$rules);
	}
	public function advanceSearch($search_key){
		return User::whereRaw('username = ? or first_name = ? or last_name = ?',
				 array($search_key,$search_key,$search_key))->paginate(10);
	}

}
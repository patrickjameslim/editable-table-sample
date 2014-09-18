<?php
namespace Quezelco\Eloquent;

use Quezelco\Interfaces\AccountRepository;
use Account;
use User;

class EloquentAccountRepository implements AccountRepository{

	public function addAccountToConsumer($user, $inputs){
		$account = new Account;
		$account->user_id = $inputs['user_id'];
		$account->account_number = $inputs['account_number'];
		$account->route_id = $inputs['route_id'];
		$account->meter_number = $inputs['meter_number'];
		$account->billing_address = $inputs['billing_address'];
		$account->current_reading = $inputs['current_reading'];
		$account->previous_reading = $inputs['previous_reading'];
		$account->save();
	}

	public function updateReading($consumer, $newReading){
		$previousReading = $consumer->current_reading;
		$consumer->current_reading = $newReading;
		$consumer->previous_reading = $previousReading;
		$consumer->save();
	}

	public function all(){
		return Account::all();
	}

	public function search($key){
		return Account::with('users')->whereRaw('account_number LIKE ? or meter_number LIKE ?',array($key,$key));
	}

	public function find($id){
		return Account::find($id);
	}
}
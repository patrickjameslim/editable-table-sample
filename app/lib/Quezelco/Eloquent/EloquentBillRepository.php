<?php
namespace Quezelco\Eloquent;

use Quezelco\Interfaces\BillRepository;
use Bill;
use Carbon\Carbon;
class EloquentBillRepository implements BillRepository{
	private $recordsPerPage = 15;
	
	public function find($id){
		return Bill::find($id);
	}

	public function updateBilling($account, $inputs){
		//save new bill
		$arrayStart = explode("/",$inputs['start_date']);
		$arrayEnd =  explode("/", $inputs['end_date']);
		$bill = new Bill();
		$bill->account_id = $account->id;
		$bill->due_date = Carbon::now()->addDays(9);
		$bill->payment_status = 0;
		$bill->start_date = Carbon::createFromDate($arrayStart[2], $arrayStart[0], $arrayStart[1]);
		$bill->end_date = Carbon::createFromDate($arrayEnd[2], $arrayEnd[0], $arrayEnd[1]);
		$bill->save();

		//update new account
		$current = $account->current_reading;
		$account->previous_reading = $current;
		$account->current_reading = $inputs['new_reading'];
	}

	public function all(){
		return Bill::all();
	}

	public function paginate(){
		return Bill::paginate($this->recordsPerPage);
	}

}
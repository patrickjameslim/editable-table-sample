<?php
namespace 
use Quezelco\Interfaces\BillRepository;
class EloquentBillRepository implements BillRepository{
	public function find($id){
		return Bill::find($id);
	}

	public function updateBilling($account, $inputs){
		$bill = new Bill();
		$bill->account_id = $account->id;
		$bill->oebr_number = $inputs['oebr_number'];
		$bill->current_bill_amount = $inputs['current_bill_amount'];
		$bill->start_date = $inputs['start_date'];
		$bill->end_date = $inputs['end_date'];
		$bill->save();
	}
}
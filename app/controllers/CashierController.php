<?php

use Quezelco\Interfaces\BillRepository as Bill;
use Quezelco\Interfaces\AuthRepository as Auth;

class CashierController extends BaseController{
	public function __construct(Bill $bill, Auth $auth){
		$this->auth = $auth;
		$this->bill = $bill;
	}
	public function showHome(){
		return View::make('cashier.index');
	}

	public function showOEBR(){
		$rules = array('oebr' => 'required|exists:accounts,oebr_number');
		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('cashier/home')->withErrors($validator);
		}else{
			$oebr = Input::get('oebr');
			$bill = $this->bill->findNextPayment($oebr);
			if(is_null($bill)){
				Session::flash('message','There are no pending dues for this account');
				return Redirect::to('cashier/home');
			}
			return View::make('cashier.payment')->with('bill',$bill);
		}
		
	}

	public function acceptPayment($id){

		$bill = $this->bill->find($id);

		$bill->payment_status = 1;
		$bill->save();
		$payment = new Payment();
		$payment->payment = Input::get('payment');
		$payment->change = Input::get('payment') - $bill->due_payment;
		$payment->bill_id = $id;
		$payment->cashier_id = $this->auth->getCurrentUser()->id;

		$payment->save();
		Session::flash('message','Payment Accepted! Change is: ' . $payment->change);
		return Redirect::to('cashier/home');
	}
}
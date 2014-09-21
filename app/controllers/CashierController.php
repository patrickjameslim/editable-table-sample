<?php
use Quezelco\Interfaces\BillRepository as Bill;

class CashierController extends BaseController{
	public function __construct(Bill $bill){
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
			return View::make('cashier.payment')->with('bill',$bill);
		}
		
	}

	public function acceptPayment($id){
		$payment = new Payment();
		$payment->payment = Input::get('payment');
		$payment->change = Input::get('payment') - Input::get('due_payment');
		$payment->bill_id = $id;

		$payment->save();
		Session::flash('message','Payment Accepted!');
		return Redirect::to('cashier/home');
	}
}
<?php

use Quezelco\Interfaces\BillRepository as Billing;
use Quezelco\Interfaces\AccountRepository as AccountRepo;

class BillingController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(Billing $bill,AccountRepo $account){
		$this->account = $account;
		$this->bill = $bill;
	}
	public function index()
	{
		$bills = $this->bill->paginate();
		return View::make('admin.billing.index')->with('bills',$bills);
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
		//
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

	public function enterReading($id){
		$current_date = Input::get('start_date');
		$rules = array('new_reading' =>'required|numeric',
				'start_date' => 'required|date',
				'end_date' => "required|date|after:$current_date");

		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::to('/admin/enter-reading/' . $id)->with('id', $id)->withErrors($validator);
		}else{
			$account = $this->account->find($id);
			$this->bill->updateBilling($account, Input::all());
			return Redirect::to('admin/billing')->with('message','Bill added to customer');
		}
	}

	public function showEnterReadingForm($id){
		return View::make('admin.billing.reading-form')->with('id', $id);
	}
}

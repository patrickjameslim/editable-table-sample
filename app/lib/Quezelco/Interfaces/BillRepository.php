<?php
namespace Quezelco\Interfaces
interface BillRepository{
	public function find($id);
	public function updateBill($account, $inputs);
	public function all();
	public function paginate();
}
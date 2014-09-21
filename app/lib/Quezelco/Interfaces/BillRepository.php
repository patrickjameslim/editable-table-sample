<?php
namespace Quezelco\Interfaces;

interface BillRepository{
	public function find($id);
	public function updateBilling($account, $inputs);
	public function all();
	public function paginate();
}
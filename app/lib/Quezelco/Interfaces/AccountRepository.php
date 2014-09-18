<?php
namespace Quezelco\Interfaces;
interface AccountRepository{
	public function all();
	public function search($searchKey);
	public function find($id);
	public function addAccountToConsumer($inputs);
	public function updateReading($inputs);
}
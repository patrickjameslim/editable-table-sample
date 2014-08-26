<?php 
namespace Quezelco\Interfaces;
interface UserRepository {
	public function all();
	public function find($id);
	public function findByUsername($username);
	public function paginate($pages);
	public function validate($inputs);
	public function validateEdit($inputs);
	public function advanceSearch($search_key);
}
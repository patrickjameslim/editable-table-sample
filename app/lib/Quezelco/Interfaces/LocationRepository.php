<?php
namespace Quezelco\Interfaces;

interface LocationRepository{
	public function find($id);
	public function all();
	public function add($inputs);
	public function update($location);
	public function delete($location);
	public function search($searchKey);
	public function getRoutes($location);
	public function paginate($location);
	public function getAllPaginated();
}
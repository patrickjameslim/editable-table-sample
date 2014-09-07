<?php
namespace Quezelco\Interfaces;

interface RoutesRepository{
	public function create($inputs);
	public function update($id);
	public function all();
	public function delete($id);
	public function find($id);
	public function search($searchKey);
	public function paginate($routes);
	public function getLocation($route);
}
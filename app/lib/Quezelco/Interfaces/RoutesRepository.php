<?php

interface RoutesRepository{
	public function create();
	public function update($id);
	public function all();
	public function delete();
	public function find($id);
	public function search($searchKey);
}
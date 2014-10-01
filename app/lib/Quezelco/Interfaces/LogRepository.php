<?php
namespace Quezelco\Interfaces;

interface LogRepository{
	public function add($id, $state);
	public function find($id);
	public function all();
}
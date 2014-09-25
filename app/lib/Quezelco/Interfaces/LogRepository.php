<?php
namespace Quezelco\Interfaces;

interface LogRepository{
	public function find($id);
	public function all();
}
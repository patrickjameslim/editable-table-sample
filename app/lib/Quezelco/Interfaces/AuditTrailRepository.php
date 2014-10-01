<?php

namespace Quezelco\Interfaces;

interface AuditTrailRepository{
	public function all();
	public function create();
	public function find($id);
	public function paginate();
}
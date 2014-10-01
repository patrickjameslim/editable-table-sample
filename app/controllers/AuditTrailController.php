<?php

use Quezelco\Interfaces\AuditTrailsRepository as AuditTrails;

class AuditTrailController extends BaseController {
	public function __construct(AuditTrails $audit_trails){
		$this->audit_trals = $audit_trails;
	}

	public function all() {
		return $this->audit_trails->all();
	}

	public function create($user, $activity) {
		return $this->audit_trails->create($user, $activity);
	}

	public function find($id) {
		return $this->audit_trails->find($id);
	}
}
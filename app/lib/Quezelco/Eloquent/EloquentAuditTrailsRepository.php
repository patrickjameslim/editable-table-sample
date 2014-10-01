<?php

namespace Quezelco\Eloquent;

use Quezelco\Interfaces\AuditTrailsRepository;
use User;

class EloquentAuditTrailsRepository implements AuditTrailsRepository {

	private $recordsPerPage = 15;

	public function all(){
		return AuditTrails::all();
	}

	public function create($user, $activity){
		$audit_trails = new AuditTrails();

		$audit_trails->user_id = $user->id;
		$audit_trails->activity = $activity;
	}

	public function find($id){
		return AuditTrails::find($id);
	}
}
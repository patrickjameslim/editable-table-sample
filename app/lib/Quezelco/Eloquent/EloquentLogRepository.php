<?php
namespace Quezelco\Eloquent;

use Quezelco\Interfaces\LogRepository;
use Logging;

class EloquentLogRepository implements LogRepository{

	public function find($id){
		return Logging::find($id);
	}

	public function all(){
		return Logging::orderBy('created_at','desc');
	}

	public function add($id, $state){
		$log = new Logging;
		$log->user_id = $id;
		$log->status = $state;
		$log->save();
	}
}
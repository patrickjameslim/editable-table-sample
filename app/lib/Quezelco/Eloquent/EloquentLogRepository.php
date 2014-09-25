<?php
namespace Quezelco\Eloquent;

use Quezelco\Interfaces\LogRepository;

class EloquentLogRepository implements LogRepository{

	public function find($id){
		return Log::find($id);
	}

	public function all(){
		return Log::all()->orderBy('created_at');
	}
}
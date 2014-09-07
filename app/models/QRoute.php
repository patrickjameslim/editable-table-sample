<?php
class QRoute extends Eloquent{
	protected $table = "routes";
	public $timestamps = false;

	public function location(){
		return $this->belongsTo('Location');
	}
}
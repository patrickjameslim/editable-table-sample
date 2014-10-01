<?php

class Logging extends Eloquent{
	protected $table = "logs";

	public function user(){
		return $this->belongsTo('User');
	}
}
<?php

class Account extends Eloquent{
	
	public $timestamps = false;

	public function consumer() {
		return $this->belongsTo('User','user_id');
	}

	public function routes(){
		return $this->belongsTo('QRoute','route_id');
	}
}
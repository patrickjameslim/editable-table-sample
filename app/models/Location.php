<?php
class Location extends Eloquent{
	public $timestamps = false;

	public function routes(){
		return $this->hasMany('QRoute');
	}
}
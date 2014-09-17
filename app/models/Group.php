<?php
class Group extends Eloquent{
	protected $table = "groups";

	public function customers(){
		return $this->hasMany('User','users');
	}

	public function getCustomer($id){
		return $this->hasMany('User','users')->find($id);
	}
}
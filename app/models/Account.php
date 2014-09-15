<?php

class Account extends Eloquent{
	public function consumer(){
		return $this->belongsTo('User');
	}
} 
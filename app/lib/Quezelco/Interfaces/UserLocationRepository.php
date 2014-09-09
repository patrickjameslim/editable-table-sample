<?php
namespace Quezelco\Interfaces;

interface UserLocationRepository{
	public function addToLocation($user, $inputs);
}
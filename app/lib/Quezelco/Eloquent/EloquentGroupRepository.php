<?php
namespace Quezelco\Eloquent;
use Group;
use Quezelco\Interfaces\GroupRepository;
class EloquentGroupRepository implements GroupRepository{
	public function all(){
		return Group::all();
	}
}

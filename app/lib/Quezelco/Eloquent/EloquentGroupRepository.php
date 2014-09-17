<?php
namespace Quezelco\Eloquent;
use Group;
use Sentry;
use UserGroups;
use Quezelco\Interfaces\GroupRepository;
class EloquentGroupRepository implements GroupRepository{
	public function all(){
		return Group::all();
	}

	public function updateGroup($user, $groupId){
		UserGroups::where('user_id', '=', $user->id)->delete();
		$user->addGroup(Sentry::findGroupById($groupId));
	}
}

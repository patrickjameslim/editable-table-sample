<?php
namespace Quezelco\Interfaces;
interface GroupRepository{
	public function all();
	public function updateGroup($user, $groupId);
}
<?php
namespace Quezelco\Interfaces;
interface AuthRepository{
	public function register($input);
	public function findGroupById($id);
	public function findGroupByName($name);
	public function findUserByCredentials($inputs);
	public function getCurrentUser();
	public function authenticate($credentials);
	public function logout();
	public function find($id);
}
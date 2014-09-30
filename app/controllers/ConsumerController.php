<?php
use Quezelco\Interfaces\AccountRepository as Account;
use Quezelco\Interfaces\AuthRepository as Auth;
class ConsumerController extends BaseController{

	public function __construct(Account $account, Auth $auth){
		$this->account = $account;
		$this->auth = $auth;
	}

	public function showHome(){
		$user = $this->auth->getCurrentUser();
		$accounts = $this->account->findAccountsByUser($user)->paginate(5);
		return View::make('consumer.index')->with('user', $user)->with('accounts',$accounts);
	}

	public function showEnroll(){
		$user = $this->auth->getCurrentUser();
		return View::make('consumer.enroll')->with('user', $user);
	}
}
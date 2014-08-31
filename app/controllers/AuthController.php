<?php

use Quezelco\Interfaces\AuthRepository as Auth;
class AuthController extends BaseController{

	public function __construct(Auth $auth){
		$this->auth = $auth;
	}

	public function validateLogin(){
		$username = Input::get('username');
		$password = Input::get('password');
		$returnUrl = "";
		try{
			$credentials = array('username' => $username,
								 'password' => $password);
			$user = $this->auth->authenticate($credentials);
			$error = "";
			$returnUrl = $this->redirectToRoleUrl($user);
			return Redirect::to($returnUrl);
		}catch (Cartalyst\Sentry\Users\LoginRequiredException $e){
		    $error = 'Username is required.';
		}catch (Cartalyst\Sentry\Users\PasswordRequiredException $e){
		    $error = 'Password is required.';
		}catch (Cartalyst\Sentry\Users\WrongPasswordException $e){
		    $error = 'Either username or password is wrong try again.';
		}catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
		    $error = 'User was not found.';
		}catch (Cartalyst\Sentry\Users\UserNotActivatedException $e){
		    $error = 'User is not activated.';
		}

		return View::make('login')->with('error_message',$error);
	}

	public function logout(){
		$this->auth->logout();
		return View::make('login')->with('logout_message' ,'User Succesfully Logout');
	}

	public function redirectAlreadyLoggedIn(){
		$user = $this->auth->getCurrentUser();
		$returnUrl = $this->redirectToRoleUrl($user);
		return Redirect::to($returnUrl);
	}

	public function redirectToRoleUrl($user){
		if($user->inGroup($this->auth->findGroupByName('System Admin'))){
			return 'admin/home';
		}else if($user->inGroup($this->auth->findGroupByName('Cashier'))){
			return 'cashier/home';
		}
	}
}
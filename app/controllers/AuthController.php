<?php
class AuthController extends BaseController{

	public function validateLogin(){
		$username = Input::get('username');
		$password = Input::get('password');
		$returnUrl = "";
		try{
			$credentials = array('username' => $username,
								 'password' => $password);
			$user = Sentry::authenticate($credentials,false);
			$error = "";
			if($user->inGroup(Sentry::findGroupByName('System Admin'))){
				$returnUrl = 'admin/home';
			}else if($user->inGroup(Sentry::findGroupByName('Cashier'))){
				$returnUrl = 'cashier/home';
			}
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
		Sentry::logout();
		return View::make('login')->with('logout_message' ,'User Succesfully Logout');
	}
}
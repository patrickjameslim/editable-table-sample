<?php
class LoginController extends BaseController{

	public function validateLogin(){
		$username = Input::get('username');
		$password = Input::get('password');
		try{
			$credentials = array('username' => $username,
								 'password' => $password);
			$user = Sentry::authenticate($credentials,false);
		}catch (Cartalyst\Sentry\Users\LoginRequiredException $e){
		    echo 'Username is required.';
		}catch (Cartalyst\Sentry\Users\PasswordRequiredException $e){
		    echo 'Password is required.';
		}catch (Cartalyst\Sentry\Users\WrongPasswordException $e){
		    echo 'Either username or password is wrong try again.';
		}catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
		    echo 'User was not found.';
		}catch (Cartalyst\Sentry\Users\UserNotActivatedException $e){
		    echo 'User is not activated.';
		}
	}
}
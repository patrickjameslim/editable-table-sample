<?php
namespace Quezelco\Sentry;

use Sentry;
use Input;
use Quezelco\Interfaces\AuthRepository;

class SentryAuthRepository implements AuthRepository{
	public function register(){
		return Sentry::register(array(
				'username' => Input::get('username'),
				'address' => Input::get('address'),
				'password' => Input::get('password'),
				'activated' => '1',
				'first_name' => Input::get('first_name'),
				'last_name' => Input::get('last_name'),
				'contact_number' => Input::get('contact_number')
		));
	}
} 
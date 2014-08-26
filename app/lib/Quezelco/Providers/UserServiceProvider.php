<?php
namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider{
	
	public function register(){
		$this->app->bind('Quezelco\Interfaces\UserRepository',
						 'Quezelco\Eloquent\EloquentUserRepository');
	}
}
<?php

namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\AuthRepository',
						 'Quezelco\Sentry\SentryAuthRepository');
	}
}
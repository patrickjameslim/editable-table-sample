<?php

namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\AccountRepository',
						 'Quezelco\Eloquent\EloquentAccountRepository');
	}
}
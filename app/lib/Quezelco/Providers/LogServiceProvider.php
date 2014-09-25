<?php

namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\LogRepository',
						 'Quezelco\Eloquent\EloquentLogRepository');
	}
}
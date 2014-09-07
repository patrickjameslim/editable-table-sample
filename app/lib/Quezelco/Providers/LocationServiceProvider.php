<?php

namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class LocationServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\LocationRepository',
						 'Quezelco\Eloquent\EloquentLocationRepository');
	}
}
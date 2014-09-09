<?php
namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class UserLocationServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\UserLocationRepository',
						 'Quezelco\Eloquent\EloquentUserLocationRepository');
	}
}
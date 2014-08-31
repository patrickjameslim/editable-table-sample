<?php
namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class RatesServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\RatesRepository',
						 'Quezelco\Eloquent\EloquentRatesRepository');
	}
}
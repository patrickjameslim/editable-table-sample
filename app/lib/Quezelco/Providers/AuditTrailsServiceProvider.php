<?php

namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class AuditTrailsServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\AuditTrailsRepository',
						 'Quezelco\Eloquent\EloquentAuditTrailsRepository');
	}
}
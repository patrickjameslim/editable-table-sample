<?php

namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class BillServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\BillRepository',
						 'Quezelco\Eloquent\EloquentBillRepository');
	}
}
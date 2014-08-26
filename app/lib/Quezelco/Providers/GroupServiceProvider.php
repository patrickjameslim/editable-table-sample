<?php
namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

class GroupServiceProvider extends ServiceProvider{

	public function register(){
		$this->app->bind('Quezelco\Interfaces\GroupRepository',
						 'Quezelco\Eloquent\EloquentGroupRepository');
	}
}
<?php
namespace Quezelco\Providers;
use Illuminate\Support\ServiceProvider;

 class QRoutesServiceProvider extends ServiceProvider{

 	public function register(){
 		$this->app->bind('Quezelco\Interfaces\RoutesRepository',
 			'Quezelco\Eloquent\EloquentRoutesRepository');
 	}
 }
<?php namespace Mikemike\Spinner;

use Illuminate\Support\ServiceProvider;

class SpinnerServiceProvider extends ServiceProvider {
	
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
        
	}

	/**
	 * Register the application services.
	 *
	 * @return Spinner
	 */
	public function register()
	{ 
		$this->app->bind('spinner', function($app){
            return new Spinner;
        });
	}

}

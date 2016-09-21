<?php

namespace lockdown\Express;

use Illuminate\Support\ServiceProvider;

class ExpressServiceProvider extends ServiceProvider
{

	protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton([  'lockdown\Express' => 'Express' ] , function($app){
        	return new Express();
        });
    }

    public function provides(){
    	return [ 'lockdown\Express' , 'Express' ];
    }
}

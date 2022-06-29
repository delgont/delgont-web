<?php

namespace Web;

use Illuminate\Support\ServiceProvider;

class DelgontWebServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $helpers = glob( __DIR__.'/Helpers'.'/*.php');

        foreach($helpers as $key => $helper){
            require_once($helper);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    private function registerPublishables() : void
    {
        
    }

    private function registerCommands() : void
    {
        
    }

  
}

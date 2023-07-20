<?php
namespace Ejaz\Converter;

use Illuminate\Support\ServiceProvider;

class ConverterServiceProvider extends ServiceProvider{

    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'converter');

    }
    //
    public function register()
    {
    }

}
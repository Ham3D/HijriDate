<?php namespace Ham3D\Hijri;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class HijriServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->package('Ham3D/HijriDate');

        AliasLoader::getInstance()->alias('HijriDate', 'Ham3D\Hijri\HijriDate');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}

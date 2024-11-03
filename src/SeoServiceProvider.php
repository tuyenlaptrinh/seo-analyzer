<?php

namespace Tuyenlaptrinh\SeoAnalyzer;

use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    protected $defer = false;

    protected $rules = [

    ];

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/seo-analyzer.php' => config_path('seo-analyzer.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('seo-analyzer', Seo::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['seo-analyzer'];
    }
}

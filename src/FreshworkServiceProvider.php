<?php
namespace AhmeddIbrahim\Freshwork;

use Illuminate\Support\ServiceProvider;

class FreshworkServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          $this->publishes([
            __DIR__ . '/../config/freshwork.php' => config_path('freshwork.php'),
        ], 'freshwork');
    }

    public function register()
    {
        $this->app->bind('freshwork', function ($app) {
            return new Freshwork\Freshwrok;
        });
    }
}

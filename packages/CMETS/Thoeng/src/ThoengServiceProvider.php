<?php

namespace CMETS\Thoeng;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

use CMETS\Thoeng\Facades\Thoeng as ThoengFacade;

class ThoengServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/thoeng.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'thoeng');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Thoeng', ThoengFacade::class);

        $this->app->singleton('thoeng', function () {
            return new Thoeng();
        });
        
        /* $this->app->bind('thoeng', function() {
            return new Thoeng();
        }); */
    }
}

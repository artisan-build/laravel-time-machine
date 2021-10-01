<?php

namespace ArtisanBuild\LaravelTimeMachine;

use Illuminate\Support\ServiceProvider;

class TimeMachineServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-time-machine');
    }

    public function boot()
    {
    }
}

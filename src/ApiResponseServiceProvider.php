<?php

namespace Exitdump\ApiResponse;

use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/apiresponse.php', 'apiresponse');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/apiresponse.php' => config_path('apiresponse.php'),
        ], 'config');
    }
}

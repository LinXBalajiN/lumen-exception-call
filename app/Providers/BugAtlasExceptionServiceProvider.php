<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\BugatlasExceptionHandlingService;
use App\Services\BugAtlasReporterService;

class BugAtlasExceptionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind('Illuminate\Contracts\Debug\ExceptionHandler', function ($app) {
            return new BugatlasExceptionHandlingService(new BugAtlasReporterService());
        });
    }
}

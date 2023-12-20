<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SmsServiceManager;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(SmsServiceManager::class, function ($app) {
            return new SmsServiceManager();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

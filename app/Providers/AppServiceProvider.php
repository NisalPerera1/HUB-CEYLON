<?php

namespace App\Providers;
use App\Services\TranslateService;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
   }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

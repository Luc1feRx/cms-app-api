<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Passport::tokensCan([
            'admin' => 'Admin User Access',
            'user' => 'Standard User Access',
            // Các scope khác nếu cần
        ]);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {}
}

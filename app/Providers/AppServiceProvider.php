<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Gate; // 1. Wajib tambahkan ini untuk mengaktifkan Gate

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 2. Memaksa HTTPS di lingkungan production (Railway)
        if (config('app.env') === 'production' || env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }

        // 3. Tambahkan Gate Admin di bawah ini (Abaikan huruf besar/kecil dari database)
        Gate::define('admin', function ($user) {
            return strtolower($user->role) === 'admin';
        });
    }
}
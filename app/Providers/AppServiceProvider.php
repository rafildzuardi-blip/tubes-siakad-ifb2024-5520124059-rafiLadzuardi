<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Tambahkan baris ini jika belum ada

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Paksa semua URL dan Form menggunakan HTTPS jika di-deploy di Railway
        if (config('app.env') === 'production' || env('REDIRECT_HTTPS', true)) {
            URL::forceScheme('https');
        }
    }
}
<?php

namespace App\Providers; // Asegúrate de que el namespace coincida con tu estructura

use Illuminate\Support\ServiceProvider; // Importar ServiceProvider
use Illuminate\Support\Facades\Gate; // Para políticas de acceso

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
       
         // Implicitly grant "Super Admin" role all permissions
         // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(function ($user, $ability) {
            return $user->email =='proviturismonarino@gmail.com' ?? null;
        });

    }
}

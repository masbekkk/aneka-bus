<?php

namespace App\Providers;

use App\Models\TicketBus;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

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
    
    // public function boot(): void
    // {
    //     ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
    //         return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
    //     });
    // }

    public function boot() {
        $ticket = TicketBus::with('source', 'destination', 'type_bus')->get();
        view()->share('ticket', $ticket);
    }

}

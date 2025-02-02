<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        'App\Events\UserCreatedEvent' => [
            'App\Listeners\UserCreatedListener'
        ],
        'App\Events\RequestCreatedEvent' => [
            'App\Listeners\RequestCreatedListener'
        ],
        'App\Events\RequestUpdateEvent' => [
            'App\Listeners\RequestUpdateListener'
        ],
        'App\Events\PendingLeaveEvent' => [
            'App\Listeners\PendingLeaveListener'
        ],
        'App\Events\LeaveRequestApprovedEvent' => [
            'App\Listeners\LeaveRequestApprovedListener'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

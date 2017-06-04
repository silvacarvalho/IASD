<?php

namespace IASD\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'IASD\Events\SomeEvent' => [
            'IASD\Listeners\EventListener',
        ],
    ];
}

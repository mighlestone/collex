<?php

namespace Collex\Domain\Users\Providers;

use Collex\Domain\Users\Events\ResendVerification;
use Collex\Domain\Users\Events\UserRegistered;
use Collex\Domain\Users\Listeners\ResendVerificationEmail;
use Collex\Domain\Users\Listeners\SendVerificationEmail;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        UserRegistered::class => [
            SendVerificationEmail::class
        ],
        ResendVerification::class => [
            ResendVerificationEmail::class
        ]
    ];
}
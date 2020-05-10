<?php

namespace Collex\Domain\Users\Providers;

use Collex\Infrastructure\Abstracts\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    protected $domain = 'users';
    protected $hasFactories = true;
    protected $hasMigrations = true;

    protected $providers = [
        EventServiceProvider::class,
        RouteServiceProvider::class,
        PermissionsServiceProvider::class
    ];
}
<?php

namespace Collex\Domain\UserFunctions\Providers;

use Collex\Infrastructure\Abstracts\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    protected $domain = 'user-functions';
    protected $hasFactories = true;
    protected $hasMigrations = true;
}
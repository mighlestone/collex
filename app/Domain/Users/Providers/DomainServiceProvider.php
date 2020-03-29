<?php

namespace Collex\Domain\Users\Providers;

use Collex\Infrastructure\Abstracts\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    protected $domain = 'users';
    protected $hasMigrations = true;
}
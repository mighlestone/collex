<?php

namespace Collex\Domain\Deals\Providers;

use Collex\Infrastructure\Abstracts\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    protected $domain = 'deals';
//    protected $hasFactories = true;
    protected $hasMigrations = true;
}
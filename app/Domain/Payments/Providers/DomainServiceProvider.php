<?php

namespace Collex\Domain\Payments\Providers;

use Collex\Infrastructure\Abstracts\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    protected $domain = 'payments';
    protected $hasFactories = true;
    protected $hasMigrations = true;
}
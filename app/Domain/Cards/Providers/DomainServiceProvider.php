<?php

namespace Collex\Domain\Cards\Providers;

use Collex\Infrastructure\Abstracts\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    protected $domain = 'cards';
    protected $hasMigrations = true;
}
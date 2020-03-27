<?php

namespace Collex\Infrastructure\Abstracts;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use ReflectionClass;
use ReflectionException;

abstract class ServiceProvider extends LaravelServiceProvider
{
    /**
     * @var string Alias for load tranlations and views
     */
    protected $alias;

    /**
     * @var bool Set if will load commands
     */
    protected $hasCommands = false;

    /**
     * @var bool Set if will load factories
     */
    protected $hasFactories = false;

    /**
     * @var bool Set if will load migrations
     */
    protected $hasMigrations = false;

    /**
     * @var bool Set if will load translations
     */
    protected $hasTranslations = false;

    /**
     * @var bool Set if will load policies
     */
    protected $hasPolicies = false;

    /**
     * @var array List of custom Artisan commands
     */
    protected $commands = [];

    /**
     * @var array List of model factories to load
     */
    protected $factories = [];

    /**
     * @var array List of providers to load
     */
    protected $providers = [];

    /**
     * @var array List of policies to load
     */
    protected $policies = [];

    /**
     * Boot required registering of views and translations.
     *
     * @throws ReflectionException
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerCommands();
        $this->registerFactories();
        $this->registerMigrations();
        $this->registerTranslations();
    }

    /**
     * Register Domain ServiceProviders.
     */
    public function register()
    {
        collect($this->providers)->each(function ($providerClass) {
            $this->app->register($providerClass);
        });
    }

    /**
     * Register the application's policies.
     *
     * @return void
     */
    protected function registerPolicies()
    {
        if ($this->hasPolicies === true) {
            foreach ($this->policies as $key => $value) {
                Gate::policy($key, $value);
            }
        }
    }

    /**
     * Register domain custom Artisan commands.
     */
    protected function registerCommands()
    {
        if ($this->hasCommands === true) {
            $this->commands($this->commands);
        }
    }

    /**
     * Register Model Factories.
     */
    protected function registerFactories()
    {
        if ($this->hasFactories === true) {
            collect($this->factories)->each(function ($factoryName) {
                (new $factoryName())->define();
            });
        }
    }

    /**
     * Register domain migrations.
     *
     * @throws ReflectionException
     */
    protected function registerMigrations()
    {
        if ($this->hasMigrations === true) {
            $this->loadMigrationsFrom($this->domainPath('Database/Migrations'));
        }
    }

    /**
     * Register domain translations.
     *
     * @throws ReflectionException
     */
    protected function registerTranslations()
    {
        if ($this->hasTranslations === true) {
            $this->loadJsonTranslationsFrom($this->domainPath('Resources/Lang'));
        }
    }

    /**
     * Detects the domain base path so resources can be proper loaded on child classes.
     *
     * @param string $append
     * @return string
     * @throws ReflectionException
     */
    protected function domainPath($append = null)
    {
        $reflection = new ReflectionClass($this);

        $realPath = realpath(dirname($reflection->getFileName()) . '/../');

        if ($append === null) {
            return $realPath;
        }

        return $realPath . '/' . $append;
    }
}
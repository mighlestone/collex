<?php

namespace Collex\Domain\Users\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Collex\Domain\Users\Http\Controllers';

    /**
     * @param Router $router
     */
    public function map(Router $router): void
    {
        $this->mapApiRoutes($router);
    }

    /**
     * @param Router $router
     */
    protected function mapApiRoutes(Router $router): void
    {
        $router->namespace($this->namespace)
            ->prefix('api')
            ->name('api.auth.')
            ->group(function (Router $router) {
                $router->post('register', 'RegistrationController')
                    ->name('register');

                $router->post('authenticate', 'AuthenticationController')
                    ->name('authenticate');

                $router->delete('revoke', 'RevokeController')
                    ->name('revoke');

                $router->post('refresh', 'RefreshController')
                    ->name('refresh');
            });
    }
}
<?php

namespace Collex\Domain\Users\Providers;

use Collex\Domain\Users\RBAC\Permissions;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class PermissionsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        try {
            Permissions::define();
        } catch (QueryException $exception) {
            Log::error($exception->getMessage(), $exception->getTrace());
        }
    }
}
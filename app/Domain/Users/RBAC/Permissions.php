<?php

namespace Collex\Domain\Users\RBAC;

use Carbon\Carbon;
use Collex\Domain\Users\Models\Permission;
use Collex\Domain\Users\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;

class Permissions
{
    /**
     * Define and cache permissions within the platform.
     * TODO: refactor RBAC functionality
     *
     * @return void
     */
    public static function define(): void
    {
        $cacheKey = 'permissions';
        $permissions = Cache::get($cacheKey);

        if ($permissions === null) {
            $permissions = Permission::pluck('ident');
            Cache::put($cacheKey, $permissions->toArray(), Carbon::now()->addDay());
        } else {
            $permissions = collect($permissions);
        }

        $permissions->each(function (string $ident) {
            Gate::define($ident, function (User $user) use ($ident) {
                $cacheKey = 'user.' . $user->id . '.permissions';
                $userPermissions = Cache::get($cacheKey);

                if ($userPermissions === null) {
                    $userClosure = function ($query) use ($user) {
                        $query->where('users.id', '=', $user->id);
                    };

                    $userPermissions = Permission::query()
                        ->whereHas('roles', function ($query) use ($userClosure) {
                            $query->where('active', '=', 1)
                                ->whereHas('users', $userClosure);
                        })
                        ->orWhereHas('users', $userClosure)
                        ->groupBy('permissions.id')
                        ->where('active', '=', 1)
                        ->pluck('ident');

                    Cache::put($cacheKey, $userPermissions->toArray(), Carbon::now()->addDay());
                } else {
                    $userPermissions = collect($userPermissions);
                }

                if ($userPermissions !== null) {
                    $alternativePermissions = self::alternativePermissions($ident);
                    return null !== $userPermissions->first(function (string $ident) use ($alternativePermissions) {
                            return in_array($ident, $alternativePermissions, true);
                        });
                }

                return false;
            });
        });
    }

    /**
     * @param string $permission
     * @return array
     */
    protected static function alternativePermissions(string $permission): array
    {
        $alternativePermissions = ['*', $permission];
        $permissionParts = explode('.', $permission);
        $count = count($permissionParts);

        if ($permissionParts && $count > 1) {
            $currentPermission = '';
            for ($i = 0; $i < ($count - 1); $i++) {
                $currentPermission .= $permissionParts[$i] . '.';
                $alternativePermissions[] = $currentPermission . '*';
            }
        }

        return $alternativePermissions;
    }
}
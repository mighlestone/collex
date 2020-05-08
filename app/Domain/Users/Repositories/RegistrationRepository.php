<?php

namespace Collex\Domain\Users\Repositories;

use Collex\Domain\Users\Models\User;
use Illuminate\Support\Collection;

class RegistrationRepository
{
    /**
     * @param Collection $payload
     * @return User
     */
    public static function create(Collection $payload): User
    {
        $user = new User();
        $user->username = $payload->get('username');
        $user->first_name = $payload->get('first_name');
        $user->last_name = $payload->get('last_name');
        $user->email = $payload->get('email');
        $user->dob = $payload->get('dob');
        $user->password = bcrypt($payload->get('password'));
        $user->save();

        return $user;
    }
}
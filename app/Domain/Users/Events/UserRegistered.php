<?php

namespace Collex\Domain\Users\Events;

use Illuminate\Contracts\Auth\Authenticatable;

class UserRegistered
{
    /**
     * @var Authenticatable
     */
    private $user;

    /**
     * UserRegistered constructor.
     * @param Authenticatable $user
     */
    public function __construct(Authenticatable $user)
    {
        $this->user = $user;
    }
}
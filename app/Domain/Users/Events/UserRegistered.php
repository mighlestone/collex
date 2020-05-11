<?php

namespace Collex\Domain\Users\Events;

use Collex\Domain\Users\Models\User;
use Illuminate\Queue\SerializesModels;

class UserRegistered
{
    use SerializesModels;

    /**
     * @var User
     */
    public $user;

    /**
     * UserRegistered constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
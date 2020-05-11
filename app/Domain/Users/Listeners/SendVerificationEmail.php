<?php

namespace Collex\Domain\Users\Listeners;

use Collex\Domain\Users\Events\UserRegistered;
use Collex\Domain\Users\Notifications\VerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendVerificationEmail implements ShouldQueue
{
    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public $delay = 30;

    /**
     * Handle the event.
     *
     * @param UserRegistered $event
     */
    public function handle(UserRegistered $event)
    {
        if ($event->user instanceof MustVerifyEmail && $event->user->hasVerifiedEmail() === false) {
            Notification::send($event->user, new VerifyEmail($event->user));
        }
    }
}
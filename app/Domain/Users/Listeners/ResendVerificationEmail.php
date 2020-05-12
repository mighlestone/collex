<?php

namespace Collex\Domain\Users\Listeners;

use Collex\Domain\Users\Events\ResendVerification;
use Collex\Domain\Users\Notifications\VerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class ResendVerificationEmail implements ShouldQueue
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
     * @param ResendVerification $event
     */
    public function handle(ResendVerification $event)
    {
        if ($event->user->hasVerifiedEmail() === false) {
            Notification::send($event->user, new VerifyEmail($event->user));
        }
    }
}
<?php

namespace Collex\Domain\Users\Notifications;

use Carbon\Carbon;
use Collex\Domain\Users\Models\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class VerifyEmail extends Notification
{
    /**
     * @var User
     */
    private $user;

    /**
     * VerifyEmail constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        $verificationUrl = $this->verificationUrl($this->user);

        return (new MailMessage)
            ->subject('Collex: Verify Email Address')
            ->line('Click the button below to verify your email address on Collex.')
            ->action('Verify Email Address', $verificationUrl)
            ->line('If you did not create an account, no further action is required');
    }

    /**
     * @param User $user
     * @return string
     */
    protected function verificationUrl($user): string
    {
        return URL::temporarySignedRoute(
            'api.auth.verify',
            Carbon::now()->addHour(),
            [
                'id' => $user->getKey(),
                'hash' => sha1($user->getEmailForVerification()),
            ]
        );
    }
}
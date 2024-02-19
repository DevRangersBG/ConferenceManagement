<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class EmailNotification extends Notification
{
    use Queueable;

    /**
     * @var array $project
     */
    protected $project;

    /**
     * Create a new notification instance.
     */
    public function __construct(array $project)
    {
        // following example @ https://dev.to/codeanddeploy/laravel-8-email-notification-example-oai
        $this->project = $project;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail']; //,'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->greeting($this->project['greeting'])
                    ->line($this->project['body'])
                    ->action($this->project['actionText'], $this->project['actionURL'])
                    ->line($this->project['thanks']);
                    /*
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
                    */
    }

    // Added from example https://dev.to/codeanddeploy/laravel-8-email-notification-example-oai
    /*
    public function toDatabase($notifiable)
    {
        return [
            'project_id' => $this->project['id']
        ];
    }
    */

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

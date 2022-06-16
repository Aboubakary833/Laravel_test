<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $title;
    public $website;
    public $description;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        string $user,
        string $website,
        string $title,
        string $description
    )
    {
        $this->user = $user;
        $this->title = $title;
        $this->website = $website;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Notification')
        ->view(
            'mails.sendNotificationMail',
            [
                'user' => $this->user,
                'title' => $this->title,
                'website' => $this->website,
                'description' => $this->description,
            ]
        );
    }
}

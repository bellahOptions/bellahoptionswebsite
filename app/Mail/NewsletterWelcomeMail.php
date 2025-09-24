<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterWelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

      public function build()
    {
        return $this->subject('🎉 Welcome to Bellah Options Waitlist!')
                    ->markdown('emails.newsletter.welcome')
                    ->with([
                        'name' => $this->user->fname ?? $this->user->name,
                        'email' => $this->user->email,
                    ]);
    }
}

<?php

namespace App\Mail;

use App\User;
use App\Challenge;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChallengeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $challenge;

    public function __construct(Challenge $challenge)
    {
        $this->challenge = $challenge;
    }

    public function build()
    {
        return $this
            ->subject('Take challenge from your friend')
            ->markdown('emails.friendChallenge');
    }
}

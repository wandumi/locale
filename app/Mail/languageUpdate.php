<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class languageUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $locale;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($locale)
    {
        //@dd($locale);
        $this->locale = $locale;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Language was changed on profile ';

        return $this->subject($subject) 
                    ->view('mails.languages');
    }
}

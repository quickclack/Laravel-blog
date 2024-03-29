<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscribeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(protected $formData)
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): SubscribeEmail
    {
        return $this->view('emails.subscribe')->with([
            'formData' => $this->formData
        ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(protected $password)
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): ForgotPassword
    {
        return $this->view('emails.forgot')->with([
            'password' => $this->password
        ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterByEmail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $username;
    public $captcha;

    /**
     * Create a new message instance.
     *
     * @param string $username
     * @param string $captcha
     *
     * @return void
     */
    public function __construct(string $username, string $captcha)
    {
	    $this->username = $username;
	    $this->captcha = $captcha;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.register.register');
    }
}

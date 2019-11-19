<?php

namespace App\Mail;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailtoAdmin extends Mailable
{
    use Queueable, SerializesModels;
    private $usermessage;
    private $username;
    private $usermail;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $message
     */
    public function __construct($name, $email, $message)
    {
        $this->username = $name;
        $this->usermail = $email;
        $this->usermessage = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@eptlm.com', 'EPTLM')
            ->subject('Contact Form Submission')
            ->markdown('mails.contactForm')
            ->with([
                'name' => $this->username,
                'message' => $this->usermessage,
                'email' => $this->usermail,
            ]);
    }
}

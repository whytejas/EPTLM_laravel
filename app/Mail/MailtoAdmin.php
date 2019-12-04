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
    private $usersubject;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $subject
     * @param $message
     */
    public function __construct($name, $email, $subject, $message)
    {
        $this->username = $name;
        $this->usermail = $email;
        $this->usersubject = $subject;
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
                'subject' => $this->usersubject,
                'email' => $this->usermail,
            ]);
    }
}

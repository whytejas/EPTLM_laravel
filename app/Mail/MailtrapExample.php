<?php

namespace App\Mail;


use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailtrapExample extends Mailable
{
    use Queueable, SerializesModels;
    private $username;



    /**
     * Create a new message instance.
     *
     * @param $name
     */
    public function __construct($name)
    {
         $this->username = $name;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@eptlm.com', 'EPTLM')
            ->subject('Thank you for contacting EPTLM!')
            ->markdown('mails.example')
            ->with([
                'name' => $this->username,
                'link' => 'https://mailtrap.io/inboxes',
            ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function formSubmit()
    {

        if (isset($_POST['Name']) && isset($_POST['Email']) && ($_POST['Message'])) {

            $name = $_POST['Name'];
            $visitor_email = $_POST['Email'];
            $message = $_POST['Message'];


            //** Form submission **//
            $email_from = "info@eptlm.com";
            $email_subject = "EPTLM Contact Form submission";
            $email_body = "\n You have received a new message from $name.\n \n Here is the message:\n $message.\n \nReply to this email directly to send a response to $name.";
            $to = "tejas@eptlm.com";
//   , katie@eptlm.com, david@eptlm.com, lindsay@eptlm.com, kathryn@eptlm.com";
            $headers = "From: $email_from \r\n";
            $headers .= "Reply-To: $visitor_email \r\n";

            mail($to, $email_subject, $email_body, $headers);


            //** Confirmation Mail to Visitor **//
            $welcome_email_subject = "Thank you for contacting EPTLM!";
            $welcome_email_body = "\n Dear $name, \n \n Thank you for your interest. One of us from EPTLM will be in touch shortly.\n \n Meanwhile, please take a moment to read our guidelines: \n \n *TEXT GOES HERE*  \n \nLorem ipsum dolor, sit amet consectetur adipisicing elit. \n \nTempore, dolorem eius magni fugit accusamus sed consectetur vitae aliquid cupiditate itaque amet, asperiores nulla non officia. \n \nFugit esse ipsa adipisci porro!\n \n*END OF FILLER TEXT*\n \n Best wishes,\n \nEnglish Pour Tout Le Monde";


            $w_headers = "From: $email_from \r\n";
            $w_headers .= "Reply-To: $email_from \r\n";

            mail($visitor_email, $welcome_email_subject, $welcome_email_body, $w_headers);


        }

        return view('contact');


    }
}

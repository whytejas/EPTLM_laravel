<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Mail\MailtrapExample;
use App\Mail\MailtoAdmin;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * @param Request $request
     * @return string
     */
    public function formSubmit(Request $request)
    {


        $name = $request->Name;
        $email = $request->Email;
        $message = $request->Message;


        Mail::to($email)->send(new MailtrapExample($name));

        Mail::to('katie@eptlm.com')
            ->cc(['kathryn@eptlm.com', 'lindsay@eptlm.com', 'david@eptlm.com'])
            ->send(new MailtoAdmin($name, $email, $message));

        return "Hey ".$name."! Thank you for contacting English Pour Tout Le Monde. Please check your inbox. Click <a href='/'>here</a> to return to our home page.";




    }
}

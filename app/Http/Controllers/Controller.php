<?php

namespace App\Http\Controllers;
use App\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Mail\MailtrapExample;
use App\Mail\MailtoAdmin;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * @param Request $request
     * @return string
     * @throws \Illuminate\Validation\ValidationException
     */
    public function formSubmit(Request $request)
    {

        if(isset($_POST['g-recaptcha-response'])) {
            // RECAPTCHA SETTINGS
            $captcha = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $key = '6LfCFMYUAAAAANWUfctD3cDQcfTzckFu5iLiVpVd';
            $url = 'https://www.google.com/recaptcha/api/siteverify';

            // RECAPTCH RESPONSE
            $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
            $data = json_decode($recaptcha_response);

            if(isset($data->success) &&  $data->success === true) {

                $this->validate($request, [
                    'website' => 'sometimes|max:0',
                ]);

                $name = $request->Name;
                $email = $request->Email;
                $subject = $request->Subject;
                $message = $request->Message;


                Mail::to($email)->send(new MailtrapExample($name));

                Mail::to('katie@eptlm.com')
                    ->cc(['kathryn@eptlm.com', 'lindsay@eptlm.com', 'tejas@eptlm.com', 'david@eptlm.com'])
                    ->send(new MailtoAdmin($name, $email, $subject, $message));

                return "Hey ".$name."! Thank you for contacting English Pour Tout Le Monde. Please check your inbox. Click <a href='/'>here</a> to return to our home page.";
            }
            else {
                die('Your message has not been sent. You cannot continue without verifying that you are a human! Please hit back to return to the contact page');
            }
        }


else {
    return view('main.contact');
}




    }



    public function getVolunteerDetails(Request $request){

        $name = Input::get('name');
        $volunteer =  Volunteer::where('firstname', $name)->first();

        if($volunteer->lessons()->exists()){
            $lessonsNext = $volunteer->lessons()->first()->session_date;
            $lessons = Carbon::parse($lessonsNext)->format('d M Y');

        }

        else {
            $lessons = "<br><strong><em>Not signed up for any upcoming sessions !</em></strong>";

        }
        if ($request){
            $request = [
                'volunteer' => $volunteer,
                'lessons' => $lessons,
            ];
            return Response::json($request);
        }

        else {
            return response()->json(['fail'=> "NO"]);
        }
    }




}

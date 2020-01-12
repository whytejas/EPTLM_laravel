<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Volunteer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function username()
    {
        return 'username';
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth:volunteer')->except('logout');
        $this->middleware('guest')->except('logout')->except('directory');

    }



    public function showVolunteerLoginForm()
    {
        return view('auth.login', ['url' => 'volunteer']);
    }

    public function volunteerLogin(Request $request)
    {
        try {
            $this->validate($request, [
                'username' => 'required|string',
                'password' => 'required|string'
            ]);
        } catch (ValidationException $e) {
        }

        if (Auth::guard('volunteer')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {
            $volunteer = $request->all();

            return redirect()->intended('volunteer/dashboard');
        }
        return back()->withInput($request->only('username', 'remember'));
    }


    public function logout(Request $request) {

        Auth::logout();
        $request->session()->flush();
        return redirect('/');
    }


    public function directory(){
        $volunteers = Volunteer::latest()->paginate(15);
        return view('volunteer/directory', compact('volunteers'));
    }





}

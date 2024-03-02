<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


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

    protected function authenticated(Request $request, $user)
    {
        if ($user->userType === 'Patient' || $user->userType === 'Doctor' ||  $user->userType === 'Trainer') {
            return redirect('/');
        }
        else if($user->userType === 'Admin' || $user->userType === 'MedicalSpecialist') {
            return redirect('/dashboard');
        }


    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

     protected $redirectTo = '/checkpoint';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

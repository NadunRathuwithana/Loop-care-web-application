<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class WeblinkController extends Controller
{
    public function Home()
    {
        try {
            return view('user/home');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Workouts()
    {
        try {
            return view('user/workouts');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function SingleWorkout()
    {
        try {
            return view('user/single-workout');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function SingleVideo()
    {
        try {
            return view('user/singleVideo');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Appointment()
    {
        try {
            return view('user/appointment');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Meals()
    {
        try {
            return view('user/meals');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Goals()
    {
        try {
            return view('user/goals');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }


    public function Login()
    {
        try {
            return view('user/login_registration/login');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function RegStart()
    {
        try {
            return view('user/login_registration/regStart');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Reg1()
    {
        try {
            return view('user/login_registration/reg1');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Reg2()
    {
        try {
            return view('user/login_registration/reg2');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function Reg3()
    {
        try {
            return view('user/login_registration/reg3');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function Reg4()
    {
        try {
            return view('user/login_registration/reg4');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Reg5()
    {
        try {
            return view('user/login_registration/reg5');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Reg6()
    {
        try {
            return view('user/login_registration/reg6');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Reg7()
    {
        try {
            return view('user/login_registration/reg7');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Register()
    {
        try {
            return view('user/login_registration/register');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }


    // ---------------------------------------Admin -----------------------------------------------------------------------------

    public function Admin()
    {
        try {
            return view('admin/admin');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    // ---------------------------------------Admin -----------------------------------------------------------------------------
}

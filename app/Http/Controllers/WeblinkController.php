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
            return view('user/auth/login');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function RegStart()
    {
        try {
            return view('user/auth/regStart');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Reg1()
    {
        try {
            return view('user/auth/reg1');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Reg2()
    {
        try {
            return view('user/auth/reg2');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }


    public function Register_Trainer()
    {
        try {
            return view('user/auth/register_trainer');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Register_Doctor()
    {
        try {
            return view('user/auth/register_doctor');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Register()
    {
        try {
            return view('user/auth/register');
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

    public function AdminLogin()
    {
        try {
            return view('admin/auth/login');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }


    public function Users()
    {
        try {
            return view('admin/users/users');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function AddUser()
    {
        try {
            return view('admin/users/add_user');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function EditUser()
    {
        try {
            return view('admin/users/edit_user');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }


    // ---------------------------------------Admin -----------------------------------------------------------------------------
}

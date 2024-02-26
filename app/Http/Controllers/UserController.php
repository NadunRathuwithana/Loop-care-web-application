<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function Dashboard()
    {


        echo "Welcome ";
        //  return view('admin.dashboard');
    }


    public function SignIn(Request $request)
    {

        try {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isActive' => 1])) {
                $user = Auth::user();
                $id = Auth::user()->id;
                $role = Auth::user()->role;
                $token = $user->createToken('authToken')->plainTextToken;

                session()->put('id', $id);
                session()->put('role', $role);
                session()->put('token', $token);



                if ($role == 'Admin') {
                    return  redirect('/');
                } else {
                    return redirect('/');
                }
            } else {
                // return "incorrect details";
                return redirect()->back()->with('error', 'Incorrect Login Details');
                // return redirect('/')->withErrors(['Incorrect Login Details', 'The Message']);

            }
        } catch (Exception $e) {

            return redirect()->back()->withErrors(['Something Went Wrong']);
        }
    }
}

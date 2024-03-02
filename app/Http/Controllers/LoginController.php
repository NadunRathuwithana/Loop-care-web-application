<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function UserLogin(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Please enter your password.',
        ]);


        try {
            if(Auth::attempt($credentials)) {
                // Authentication passed...

            $id = Auth::user()->id;
            $userType = Auth::user()->userType;
            $role = Auth::user()->role;
            $fName = Auth::user()->fName;
            $lName = Auth::user()->lName;
            $userId = Auth::user()->userId;

            session()->put('id', $id);
            session()->put('userId', $userId);
            session()->put('userType', $userType);
            session()->put('role', $role);
            session()->put('fName', $fName);
            session()->put('lName', $lName);


            if ($userType == "Patient") {

                return redirect('/');

            }elseif ($userType == "Doctor") {

                return redirect('/doctor');

            }elseif ($userType == "Trainer") {

                return redirect('/trainer');

            }else{
                return redirect('/logout');
            }

            }

            return redirect()->back()->withInput($request->only('email'))->with('error', 'Invalid username or password.');

        } catch (Exception $e) {

            return redirect()->back()->withInput($request->only('email'))->with('error', 'Invalid username or password.');
        }
    }


    public function Logout(){

        session()->forget('role');
        session()->forget('userId');
        session()->forget('userType');
        session()->forget('role');
        session()->forget('lName');
        session()->forget('fName');
        session()->flush();

        return redirect('/');
    }
}

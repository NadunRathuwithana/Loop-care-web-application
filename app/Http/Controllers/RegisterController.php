<?php

namespace App\Http\Controllers;

use App\Models\DocSpeciality;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\PatientPains;
use App\Models\Trainer;
use App\Models\TrainerSpeciality;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function PatientRegister(Request $request)
    {

        $this->validate($request, [
            'email' => 'unique:users'
        ]);

        try {

            $user = User::where('email', '=', $request->email)->first();


            if (!$user) {
                $userId = uniqid();


                //save to patient table
                $patient = new Patient();
                $patient->patientFName = $request->fName;
                $patient->patientLName = $request->lName;
                $patient->email = $request->email;
                $patient->sex = $request->sex;
                $patient->height = $request->height;
                $patient->weight = $request->weight;
                $patient->dob = $request->dob;
                $patient->userId = $userId;
                $patient->save();

                //save to user table

                $user = new User();

                $user->userId = $userId;
                $user->fName = $request->fName;
                $user->lName = $request->lName;
                $user->email = $request->email;
                $user->contact = $request->contact;
                $user->password = Hash::make($request->password);
                $user->userType = 'Patient';
                $user->role = 'user';
                $user->isActive = 1;
                $user->save();

                //save patient pains

                foreach ($request->pain as $checkboxValue) {


                    $pains = new PatientPains();
                    $pains->patientId = $userId;
                    $pains->pain = $checkboxValue;
                    $pains->save();
                }



                Auth::login($user);

                $id = Auth::user()->id;
                 $userType = Auth::user()->userType;
                $fName = Auth::user()->fName;
                $lName = Auth::user()->lName;
                $userId = Auth::user()->userId;

                session()->put('id', $id);
                session()->put('userId', $userId);
                session()->put('userType', $userType);
                session()->put('fName', $fName);
                session()->put('lName', $lName);
            }
            Auth::login($user);

            $id = Auth::user()->id;
             $userType = Auth::user()->userType;
            $fName = Auth::user()->fName;
            $lName = Auth::user()->lName;
            $userId = Auth::user()->userId;

            session()->put('id', $id);
            session()->put('userId', $userId);
            session()->put('userType', $userType);
            session()->put('fName', $fName);
            session()->put('lName', $lName);


            return $fName;
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something quite wrong happened');
        }
    }



    public function DoctorRegister(Request $request)
    {

        $this->validate($request, [
            'email' => 'unique:users'
        ]);

        try {
            if ($request->hasFile('file')) {

                $file = uniqid() . '-' . $request->file('file')->getClientOriginalName();
                $filePath = $request->file->move(public_path('adminImages/doctorFiles/'), $file);
            } else {
                // If no image is uploaded, set a default image path
                $file = 'default.png';
            }

            $user = User::where('email', '=', $request->email)->first();


            if (!$user) {
                $userId = uniqid();


                //save to patient table
                $patient = new Doctor();
                $patient->doctorFName = $request->fName;
                $patient->doctorLName = $request->lName;
                $patient->email = $request->email;
                $patient->sex = $request->sex;
                $patient->district = $request->district;
                $patient->workHospital = $request->workHospital;
                $patient->workExperience = $request->workExperience;
                $patient->docRegNo = $request->docRegNo;
                $patient->medicalLicense = $file;
                $patient->userId = $userId;
                $patient->save();

                //save to user table

                $user = new User();

                $user->userId = $userId;
                $user->fName = $request->fName;
                $user->lName = $request->lName;
                $user->email = $request->email;
                $user->contact = $request->contact;
                $user->password = Hash::make($request->password);
                $user->userType = 'Doctor';
                $user->role = 'user';
                $user->isActive = 1;
                $user->save();

                //save patient pains

                foreach ($request->specialties as $checkboxValue) {
                    $pains = new DocSpeciality();
                    $pains->doctorId = $userId;
                    $pains->specialties = $checkboxValue;
                    $pains->save();
                }



                Auth::login($user);

                $id = Auth::user()->id;
                 $userType = Auth::user()->userType;
                $fName = Auth::user()->fName;
                $lName = Auth::user()->lName;
                $userId = Auth::user()->userId;

                session()->put('id', $id);
                session()->put('userId', $userId);
                session()->put('userType', $userType);
                session()->put('fName', $fName);
                session()->put('lName', $lName);
            }
            Auth::login($user);

            $id = Auth::user()->id;
             $userType = Auth::user()->userType;
            $fName = Auth::user()->fName;
            $lName = Auth::user()->lName;
            $userId = Auth::user()->userId;

            session()->put('id', $id);
            session()->put('userId', $userId);
            session()->put('userType', $userType);
            session()->put('fName', $fName);
            session()->put('lName', $lName);


            return $fName;
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something quite wrong happened');
        }
    }

    public function TrainerRegister(Request $request)
    {

        $this->validate($request, [
            'email' => 'unique:users'
        ]);

        try {
            if ($request->hasFile('file')) {

                $file = uniqid() . '-' . $request->file('file')->getClientOriginalName();
                $filePath = $request->file->move(public_path('adminImages/trainerFiles/'), $file);
            } else {
                // If no image is uploaded, set a default image path
                $file = 'default.png';
            }

            $user = User::where('email', '=', $request->email)->first();


            if (!$user) {
                $userId = uniqid();


                //save to patient table
                $patient = new Trainer();
                $patient->trainerFName = $request->fName;
                $patient->trainerLName = $request->lName;
                $patient->email = $request->email;
                $patient->sex = $request->sex;
                $patient->district = $request->district;
                $patient->gymUnit = $request->gymUnit;
                $patient->workExperience = $request->workExperience;
                $patient->regNo = $request->regNo;
                $patient->trainingLicense = $file;
                $patient->userId = $userId;
                $patient->save();

                //save to user table

                $user = new User();

                $user->userId = $userId;
                $user->fName = $request->fName;
                $user->lName = $request->lName;
                $user->email = $request->email;
                $user->contact = $request->contact;
                $user->password = Hash::make($request->password);
                $user->userType = 'Trainer';
                $user->role = 'user';
                $user->isActive = 1;
                $user->save();

                //save patient pains

                foreach ($request->specialties as $checkboxValue) {
                    $pains = new TrainerSpeciality();
                    $pains->trainerId = $userId;
                    $pains->specialties = $checkboxValue;
                    $pains->save();
                }



                Auth::login($user);

                $id = Auth::user()->id;
                 $userType = Auth::user()->userType;
                $fName = Auth::user()->fName;
                $lName = Auth::user()->lName;
                $userId = Auth::user()->userId;

                session()->put('id', $id);
                session()->put('userId', $userId);
                session()->put('userType', $userType);
                session()->put('fName', $fName);
                session()->put('lName', $lName);
            }
            Auth::login($user);

            $id = Auth::user()->id;
            $userType = Auth::user()->userType;
            $fName = Auth::user()->fName;
            $lName = Auth::user()->lName;
            $userId = Auth::user()->userId;

            session()->put('id', $id);
            session()->put('userId', $userId);
            session()->put('userType', $userType);
            session()->put('fName', $fName);
            session()->put('lName', $lName);


            return $fName;
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Something quite wrong happened');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionsAnswer;
use App\Models\UserQuestionAnswers;
use Exception;
use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class WeblinkController extends Controller
{

    ///////////////////////////////////////////////////////////// user/////////////////////////////////////////////////////
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
            return view('user/workouts/index');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function SingleWorkout()
    {
        try {
            return view('user/workouts/single-workout');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function SingleVideo()
    {
        try {
            return view('user/workouts/singleVideo');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Appointment()
    {
        try {
            return view('user/appointment/index');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Meals()
    {
        try {
            return view('user/meals/index');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function SingleMeal()
    {
        try {
            return view('user/meals/patials/view');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Goals()
    {
        try {
            return view('user/goals/index');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function SingleGoal()
    {
        try {
            return view('user/goals/patials/view');
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

    public function Profile()
    {
        try {
            return view('user/profile/index');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function RegisterQuestion()
    {
        try {

            $userType = Session('userType');


            $questions = Question::where('userType', '=', $userType)->get();

            $answers = QuestionsAnswer::join('questions', 'questions.id', '=', 'questions_answers.quetion_id')->where('questions.userType', '=', $userType)->select('questions_answers.*')->get();



            return view('user/auth/registerQuestion', compact('questions', 'answers'));
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }


    public function SaveUserAnswer(Request $request)
    {
        try {

            $id = Session('id');


            $answer = $request->answer;
            $question = $request->question;

            // Check if the user has already answered this question
            $existingAnswer = UserQuestionAnswers::where('userId', $id)
                ->where('question', $question)
                ->where('answer', $answer)
                ->first();

            if ($existingAnswer) {

                $existingAnswer->delete();
            }else{

            $userAnswer = new UserQuestionAnswers();
            $userAnswer->userId = $id;
            $userAnswer->question = $question;
            $userAnswer->answer = $answer;
            $userAnswer->save();
            }
            return response('success',200);
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    ///////////////////////////////////////////////////////////// user/////////////////////////////////////////////////////


    public function AnswerFinal()
    {
        try {
            $userType = Session('userType');

            if($userType =="Patient"){
                return redirect('/');

            }else if($userType =="Doctor" || $userType =="Trainer"){

                //logging out
                session()->forget('userId');
                session()->forget('fName');
                session()->forget('userType');
                session()->forget('lName');
                session()->forget('id');
                session()->flush();

            //   return "show pending for approval";
            return redirect('/');

            }



        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }



    public function NotFound()
    {
        try {
            return view('admin/error/404');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function Maintenance()
    {
        try {
            return view('admin/error/maintenance');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }


    // ---------------------------------------Admin -----------------------------------------------------------------------------

    public function Dashboard()
    {
        try {
            return view('admin/admin_dashboard');
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


    // public function Users()
    // {
    //     try {
    //         return view('admin/users/users');
    //     } catch (Exception $e) {
    //         return redirect('/maintenance');
    //     }
    // }

    public function Questions()
    {
        try {
            return view('admin/signup_management/questions');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function PendingRequest()
    {
        try {
            return view('admin/signup_management/pending_request');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function AllUsers()
    {
        try {
            return view('admin/signup_management/all_users');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function WorkoutManagement()
    {
        try {
            return view('admin/workout/workout');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function Account()
    {
        try {
            return view('admin/account/account');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function AppointmentManagement()
    {
        try {
            return view('admin/appointments/appointments');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function GoalManagement()
    {
        try {
            return view('admin/goals/goals');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function MealManagement()
    {
        try {
            return view('admin/meals/meals');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function LiveSessions()
    {
        try {
            return view('admin/live_sessions/live_sessions');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }
    public function Reviews()
    {
        try {
            return view('admin/reviews/reviews');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Report()
    {
        try {
            return view('admin/report/report');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    // ---------------------------------------Admin -----------------------------------------------------------------------------



    // ---------------------------------------Trainer -----------------------------------------------------------------------------
    public function TrainerHome()
    {
        try {
            return view('trainer/index');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function TrainerWorkouts()
    {
        try {
            return view('trainer/myWorkout/index');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function TrainerAppointments()
    {
        try {
            return view('trainer/appointments/index');
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    // ---------------------------------------Trainer -----------------------------------------------------------------------------

}

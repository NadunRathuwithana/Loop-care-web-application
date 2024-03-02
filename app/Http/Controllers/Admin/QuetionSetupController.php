<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\QuestionsAnswer;
use Illuminate\Support\Facades\DB;
use App\Helpers\APIResponseMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\QuetionSetupRequest;

class QuetionSetupController extends Controller
{
    public function Index()
    {
        try {
            $allQuestions = Question::get();
            return view('admin.signup_management.questions', compact('allQuestions'));
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Create(Request $request)
    {
        try {
            $question = new Question();

            $question->userType = $request->userType;
            $question->questionName = $request->questionName;

            $question->save();

            $answer = $request->input('answer');
            if (!empty($answer)) {
                foreach ($answer as $answer) {
                    QuestionsAnswer::create([
                        'quetion_id'=> $question->id,
                        'answer' => $answer
                    ]);
                }
            }

            return redirect()->back()->with('message', 'Meal added successfully');
        }
        catch (Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['message' => 'Failed to add meal']);
        }
    }

    public function Delete($id)
    {
        try {
            DB::table('questions')
                ->where(['id' => $id])
                ->delete();
            $child = QuestionsAnswer::where('quetion_id',$id)->get();
            foreach($child as $chrildren){

                DB::table('questions_answers')
                ->where(['id' => $chrildren->id])
                ->delete();

            }


            return redirect()->back()->with('message', 'User deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to retrieve Data']);

        }
    }

    public function ChangeStatus($id)
    {
        try {
            $currentStatus = DB::table('questions')
                ->where('id', $id)
                ->value('isActive');

            $newStatus = $currentStatus == 0 ? 1 : 0;

            DB::table('questions')
                ->where('id', $id)
                ->update(['isActive' => $newStatus]);

            return redirect()->back()->with('message', 'Status changed successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to change status']);
        }
    }
    
}

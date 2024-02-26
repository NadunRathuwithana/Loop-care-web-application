<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\QuestionSetup;
use App\Models\QuestionsAnswer;
use Illuminate\Support\Facades\DB;
use App\Helpers\APIResponseMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\QuetionSetupRequest;

class QuetionSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.signup_management.questions');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuetionSetupRequest $request)
    {
        try {
            DB::beginTransaction();

            $question = new QuestionSetup();
            $question->effective_role_type = $request->effectiveRoleId ?? null;
            $question->question =  $request->question ?? null;
            $question->created_by = Auth::id();
            //$question->is_active =  0 ?? null;
            $question->save();

            for($i = 0 ; $i < count($request->answer) ; $i++){
                $answer = new QuestionsAnswer();
                $answer->quetion_id = $question->id;
                $answer->answer = $request->answer[$i];
                $answer->created_by = Auth::id();
                $answer->save();
            }

            DB::commit();

            return redirect()->route('questions-setup.list')->with('success', APIResponseMessage::CREATED);
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
            return redirect()->route('questions-setup.list')->with('error', APIResponseMessage::ERROR_EXCEPTION);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }

    public function getAjaxQuestionSetupData()
    {
        $model = QuestionSetup::query()->with(['questionAnswer'])->get();

        return DataTables::of($model)
            ->editColumn('question', function ($question) {
                return $question['question'];
            })
            ->editColumn('answers', function ($question) {
                return view('admin.signup_management.patials._answers', compact('question'));
            })
            ->addColumn('action', function ($question) {
                return view('admin.signup_management.patials._action', compact('question'));
            })
            ->rawColumns(['action','answers'])
            ->make();
    }
}

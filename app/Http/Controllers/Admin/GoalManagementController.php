<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GoalManagement;
use App\Helpers\APIResponseMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class GoalManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.goals.goals');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $goal = new GoalManagement();
            $goal->first_name = $request->firstName ?? null;
            $goal->last_name =  $request->lastName ?? null;
            $goal->email =  $request->email ?? null;
            $goal->is_active =  0 ?? null;
            $goal->created_by = Auth::id();
            $goal->save();

            return redirect()->route('goal.goal')->with('success', APIResponseMessage::CREATED);
        } catch (\Exception $e) {
            return redirect()->route('goal.goal')->with('error', APIResponseMessage::ERROR_EXCEPTION);
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
        //
    }

    public function statusChange(string $id)
    {
        try {
            $goal = GoalManagement::find($id);
            $goal->is_active =  1 ?? null;
            $goal->save();

            return redirect()->route('goal.goal')->with('success', APIResponseMessage::CREATED);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->route('goal.goal')->with('error', APIResponseMessage::ERROR_EXCEPTION);

        }
    }

    public function getAjaxeGoalData()
    {
        $model = GoalManagement::query()->with([])->orderBy('id', 'desc');

        return DataTables::of($model)
            ->editColumn('first_name', function ($goal) {
                return $goal['first_name'];
            })
            ->editColumn('email', function ($goal) {
                return $goal['email'];
            })
            ->editColumn('is_active', function ($goal) {
                return view('admin.goals.patials._active', compact('goal'));
            })
            ->addColumn('action', function ($goal) {
                return view('admin.goals.patials._action', compact('goal'));
            })
            ->rawColumns(['action','is_active'])
            ->make();
    }
}

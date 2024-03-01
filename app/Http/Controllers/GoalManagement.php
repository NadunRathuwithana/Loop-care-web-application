<?php

namespace App\Http\Controllers;

use App\Models\Goal;
use App\Models\GoalAges;
use App\Models\GoalRestrictions;
use Exception;
use Illuminate\Http\Request;
use App\Helpers\StorageHelper;
use Illuminate\Support\Facades\DB;


class GoalManagement extends Controller
{
    public function Index()
    {
        try {
            $allGoals = Goal::get();
            return view('admin.goals.index', compact('allGoals'));
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Create(Request $request)
    {
        try {
            $goal = new Goal();
            $goal->goal_name = $request->goal_name;
            $goal->category = $request->category;
            $goal->goal_difficulty = $request->goal_difficulty;
            $goal->goal_calories = $request->calories;
            $goal->goal_time = $request->goal_time;
            $goal->short_description = $request->description;

            $goal->save();

            $ages = $request->input('age');
            if (!empty($ages)) {
                foreach ($ages as $age) {
                    GoalAges::create([
                        'goal_id'=> $goal->id,
                        'effective_age' => $age
                    ]);
                }
            }

            $restricted = $request->input('restrict');
            if (!empty($restricted)) {
                foreach ($restricted as $restrict) {
                    GoalRestrictions::create([
                        'goal_id'=> $goal->id,
                        'restrict' => $restrict
                    ]);
                }
            }

            $file = $request->file('goal_image');

            $folder = "Goals/";



           if($file){

            $imageExtension = $file->extension();
            $imgName = $goal->id .'.'. $imageExtension;
            $uploadUrl = (new StorageHelper($folder, $imgName, $file))->uploadImage();

            $myGoal = Goal::find($goal->id);
            $myGoal->goal_image = $imgName;
            $myGoal->save();

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
            DB::table('goals')
                ->where(['id' => $id])
                ->delete();


            return redirect()->back()->with('message', 'User deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to retrieve Data']);

        }
    }

    public function ChangeStatus($id)
    {
        try {
            // Retrieve the current value of is_active
            $currentStatus = DB::table('goals')
                ->where('id', $id)
                ->value('is_active');

            // Toggle the value of is_active
            $newStatus = $currentStatus == 0 ? 1 : 0;

            // Update the database with the new status
            DB::table('goals')
                ->where('id', $id)
                ->update(['is_active' => $newStatus]);

            return redirect()->back()->with('message', 'Status changed successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to change status']);
        }
    }
}

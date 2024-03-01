<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\MealManagement;
use App\Models\ingredient;
use App\Models\MealAges;
use App\Models\MealRestrictions;
use Illuminate\Support\Facades\DB;
use App\Helpers\StorageHelper;


class MealController extends Controller
{
    public function index()
    {
        try {
            $allMeals = MealManagement::with(['ingredient_name','ages_name','restrictions_name'])->get();
            return view('admin.meals.index', compact('allMeals'));
        } catch (Exception $e) {
            return redirect('/maintenance');
        }
    }

    public function Create(Request $request)
    {
        try {
            $meal = new MealManagement();
            $meal->meal_name = $request->meal_name;
            $meal->category = $request->category;
            $meal->meal_time = $request->meal_time;
            $meal->serving_size = $request->serving_size;
            $meal->calories = $request->calories;
            $meal->fat = $request->fat;
            $meal->sugar = $request->sugar;
            $meal->protein = $request->protein;
            $meal->carbohydrate = $request->carbohydrate;
            $meal->instructions = $request->instructions;
            $meal->short_description = $request->short_description;

            $meal->save();

            $ingre = $request->input('ingredient');
            if (!empty($ingre)) {
                foreach ($ingre as $ingredient) {
                    Ingredient::create([
                        'meal_id'=> $meal->id,
                        'ingredient' => $ingredient
                    ]);
                }
            }

            $ages = $request->input('age');
            if (!empty($ages)) {
                foreach ($ages as $age) {
                    MealAges::create([
                        'meal_id'=> $meal->id,
                        'effective_age' => $age
                    ]);
                }
            }

            $restricted = $request->input('restrict');
            if (!empty($restricted)) {
                foreach ($restricted as $restrict) {
                    MealRestrictions::create([
                        'meal_id'=> $meal->id,
                        'restrict' => $restrict
                    ]);
                }
            }

            $file = $request->file('meal_image');
            
            $folder = "Meals/";



           if($file){

            $imageExtension = $file->extension();
            $imgName = $meal->id .'.'. $imageExtension;
            $uploadUrl = (new StorageHelper($folder, $imgName, $file))->uploadImage();

            $mymeal = MealManagement::find($meal->id);
            $mymeal->meal_image = $imgName;
            $mymeal->save();

           }

            return redirect()->back()->with('message', 'Meal added successfully');
        }
        catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors(['message' => 'Failed to add meal']);
        }
    }

    public function Update(Request $request, $id)
{
    try {
        $meal = MealManagement::findOrFail($id);
        $meal->meal_name = $request->meal_name;
        $meal->category = $request->category;
        $meal->meal_time = $request->meal_time;
        $meal->serving_size = $request->serving_size;
        $meal->calories = $request->calories;
        $meal->fat = $request->fat;
        $meal->sugar = $request->sugar;
        $meal->protein = $request->protein;
        $meal->carbohydrate = $request->carbohydrate;
        $meal->instructions = $request->instructions;
        $meal->short_description = $request->short_description;

        $meal->save();

        // Delete existing ingredients, age, and restrictions
        $meal->ingredients()->delete();
        $meal->ages()->delete();
        $meal->restrictions()->delete();

        // Add new ingredients, age, and restrictions
        $ingredients = $request->input('ingredient');
        if (!empty($ingredients)) {
            foreach ($ingredients as $ingredient) {
                $meal->ingredients()->create([
                    'ingredient' => $ingredient
                ]);
            }
        }

        $ages = $request->input('age');
        if (!empty($ages)) {
            foreach ($ages as $age) {
                $meal->ages()->create([
                    'effective_age' => $age
                ]);
            }
        }

        $restrictions = $request->input('restrict');
        if (!empty($restrictions)) {
            foreach ($restrictions as $restriction) {
                $meal->restrictions()->create([
                    'restrict' => $restriction
                ]);
            }
        }

        $file = $request->file('meal_image');
        if ($file) {
            $folder = "Meals/";
            $imageExtension = $file->extension();
            $imageName = $id . '.' . $imageExtension;
            $uploadUrl = (new StorageHelper($folder, $imageName, $file))->uploadImage();

            $meal->meal_image = $imageName;
            $meal->save();
        }

        return redirect()->back()->with('message', 'Meal updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['message' => 'Failed to update meal']);
    }
}


public function Delete($id)
    {
        try {
            DB::table('meal_management')
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
            $currentStatus = DB::table('meal_management')
                ->where('id', $id)
                ->value('is_active');

            // Toggle the value of is_active
            $newStatus = $currentStatus == 0 ? 1 : 0;

            // Update the database with the new status
            DB::table('meal_management')
                ->where('id', $id)
                ->update(['is_active' => $newStatus]);

            return redirect()->back()->with('message', 'Status changed successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['Failed to change status']);
        }
    }

}

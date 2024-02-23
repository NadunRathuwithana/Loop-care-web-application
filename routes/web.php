<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeblinkController;

// //////////////////---common---///////////////
Route::get('login', [WeblinkController::class, 'Login']);
Route::get('regStart', [WeblinkController::class, 'RegStart']);
Route::get('register', [WeblinkController::class, 'Register']);
Route::get('register_doctor', [WeblinkController::class, 'Register_Doctor']);
Route::get('register_trainer', [WeblinkController::class, 'Register_Trainer']);

Route::get('404', [WeblinkController::class, 'NotFound']);
Route::get('maintenance', [WeblinkController::class, 'Maintenance']);


// ////////////////----Patient----/////////////////////
Route::get('', [WeblinkController::class, 'Home']);
Route::get('workouts', [WeblinkController::class, 'Workouts']);
Route::get('single-workout', [WeblinkController::class, 'SingleWorkout']);
Route::get('singleVideo', [WeblinkController::class, 'SingleVideo']);
Route::get('appointment', [WeblinkController::class, 'Appointment']);
Route::get('meals', [WeblinkController::class, 'Meals']);
Route::get('single-meal', [WeblinkController::class, 'SingleMeal']);
Route::get('goals', [WeblinkController::class, 'Goals']);
Route::get('single-goal', [WeblinkController::class, 'SingleGoal']);


// ////////////////----Trainer----/////////////////////
Route::get('/trainer', [WeblinkController::class, 'TrainerHome']);
Route::get('/trainer/workouts', [WeblinkController::class, 'TrainerWorkouts']);
Route::get('/trainer/workouts/create', [WeblinkController::class, 'CreateWorkout']);
Route::get('/trainer/singlePlaylist', [WeblinkController::class, 'SinglePlaylist']);



// ////////////////----Admin----/////////////////////
Route::get('admin', [WeblinkController::class, 'Dashboard']);

Route::get('admin/login', [WeblinkController::class, 'AdminLogin']);

Route::get('user_management', [WeblinkController::class, 'Users']);
Route::get('questions_setup', [WeblinkController::class, 'Questions']);
Route::get('pending_request', [WeblinkController::class, 'PendingRequest']);
Route::get('all_users', [WeblinkController::class, 'AllUsers']);
Route::get('workout_management', [WeblinkController::class, 'WorkoutManagement']);
Route::get('admin_account', [WeblinkController::class, 'Account']);
Route::get('appointments_management', [WeblinkController::class, 'AppointmentManagement']);
Route::get('goal_management', [WeblinkController::class, 'GoalManagement']);
Route::get('meal_management', [WeblinkController::class, 'MealManagement']);
Route::get('live_sessions_management', [WeblinkController::class, 'LiveSessions']);
Route::get('review_management', [WeblinkController::class, 'Reviews']);
Route::get('report_management', [WeblinkController::class, 'Report']);







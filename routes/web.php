<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeblinkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', [WeblinkController::class, 'Home']);
Route::get('workouts', [WeblinkController::class, 'Workouts']);
Route::get('single-workout', [WeblinkController::class, 'SingleWorkout']);
Route::get('singleVideo', [WeblinkController::class, 'SingleVideo']);
Route::get('appointment', [WeblinkController::class, 'Appointment']);
Route::get('meals', [WeblinkController::class, 'Meals']);
Route::get('goals', [WeblinkController::class, 'Goals']);


Route::get('login', [WeblinkController::class, 'Login']);
Route::get('regStart', [WeblinkController::class, 'RegStart']);
Route::get('register', [WeblinkController::class, 'Register']);
Route::get('register_doctor', [WeblinkController::class, 'Register_Doctor']);
Route::get('register_trainer', [WeblinkController::class, 'Register_Trainer']);


//admin

Route::get('admin', [WeblinkController::class, 'Dashboard']);

Route::get('admin/login', [WeblinkController::class, 'AdminLogin']);

Route::get('user_management', [WeblinkController::class, 'Users']);
Route::get('questions_setup', [WeblinkController::class, 'Questions']);
Route::get('pending_request', [WeblinkController::class, 'PendingRequest']);
Route::get('all_users', [WeblinkController::class, 'AllUsers']);
Route::get('workout_management', [WeblinkController::class, 'WorkoutManagement']);






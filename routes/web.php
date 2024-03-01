<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WeblinkController;
use App\Http\Controllers\Admin\QuetionSetupController;
use App\Http\Controllers\Admin\GoalManagementController;
use App\Http\Controllers\Admin\MealManagementController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;

Route::get('404', [WeblinkController::class, 'NotFound']);
Route::get('maintenance', [WeblinkController::class, 'Maintenance']);

Route::post('registerQuestion', [WeblinkController::class, 'RegisterQuestion']);

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
Route::get('profile', [WeblinkController::class, 'Profile']);


// ////////////////----Trainer----/////////////////////
Route::get('/trainer', [WeblinkController::class, 'TrainerHome']);
Route::get('/trainer/workouts', [WeblinkController::class, 'TrainerWorkouts']);
Route::get('/trainer/appointments', [WeblinkController::class, 'TrainerAppointments']);


// ////////////////----Admin----/////////////////////
Route::get('admin', [WeblinkController::class, 'AdminLogin']);

Route::get('dashboard', [WeblinkController::class, 'Dashboard']);

Route::get('admin_users', [AdminController::class, 'Index']);
Route::post('create_admin_users', [AdminController::class, 'Create']);
Route::get('delete_admin_users{id}', [AdminController::class, 'Delete']);
Route::get('status_admin_users{id}', [AdminController::class, 'ChangeStatus']);
Route::post('/edit_admin_users/{id}', [AdminController::class, 'Edit']);


Route::get('questions_setup', [WeblinkController::class, 'Questions']);
Route::get('pending_request', [WeblinkController::class, 'PendingRequest']);
Route::get('all_users', [WeblinkController::class, 'AllUsers']);
Route::get('workout_management', [WeblinkController::class, 'WorkoutManagement']);
Route::get('admin_account', [WeblinkController::class, 'Account']);
Route::get('appointments_management', [WeblinkController::class, 'AppointmentManagement']);
Route::get('meal_management', [WeblinkController::class, 'MealManagement']);
Route::get('live_sessions_management', [WeblinkController::class, 'LiveSessions']);
Route::get('review_management', [WeblinkController::class, 'Reviews']);
Route::get('report_management', [WeblinkController::class, 'Report']);

    //user management
    Route::group([
        'prefix' => 'questions-setup',
        'as' => 'questions-setup.'
    ], function () {
        Route::get('/', [QuetionSetupController::class, 'index'])->name('list');
        Route::post('/store-questions-setup', [QuetionSetupController::class, 'store'])->name('store-questions-setup');
        Route::get('/get-questions-setup', [QuetionSetupController::class, 'getAjaxQuestionSetupData'])->name('get-questions');
        Route::delete('/delete-questions-setup/{id}', [QuetionSetupController::class, 'destroy'])->name('delete-questions-setup');
        Route::put('/update-questions-setup/{id}', [QuetionSetupController::class, 'update'])->name('update-questions-setup');
    });

    //goal management
    Route::group([
        'prefix' => 'goal',
        'as' => 'goal.'
    ], function () {
        Route::get('/', [GoalManagementController::class, 'index'])->name('goal');
        Route::post('/store-goal', [GoalManagementController::class, 'store'])->name('store-goal');
        Route::get('/get-goal', [GoalManagementController::class, 'getAjaxeGoalData'])->name('get-goal');
        Route::delete('/delete-goal/{id}', [GoalManagementController::class, 'destroy'])->name('delete-goal');
        Route::put('/update-goal/{id}', [GoalManagementController::class, 'update'])->name('update-goal');
        Route::delete('/goal-status/{$id}', [GoalManagementController::class, 'statusChange'])->name('goal-status');
    });

    // mealmanagement
    Route::resource('meals', MealManagementController::class);





// //////////////////---User---///////////////
Route::get('login', [WeblinkController::class, 'Login']);
Route::get('regStart', [WeblinkController::class, 'RegStart']);
Route::get('register', [WeblinkController::class, 'Register']);
Route::get('register_doctor', [WeblinkController::class, 'Register_Doctor']);
Route::get('register_trainer', [WeblinkController::class, 'Register_Trainer']);

Route::post('patientRegister', [RegisterController::class, 'PatientRegister']);
Route::post('doctorRegister', [RegisterController::class, 'DoctorRegister']);
Route::post('trainerRegister', [RegisterController::class, 'TrainerRegister']);


Route::post('userLogin', [LoginController::class, 'UserLogin']);

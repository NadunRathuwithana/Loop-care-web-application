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
use App\Http\Controllers\MealController;
use App\Http\Controllers\GoalManagement;


Auth::routes();



Route::middleware(['auth', 'role:Admin,MedicalSpecialist'])->group(function () {


// ////////////////----Admin----/////////////////////

Route::get('admin', [WeblinkController::class, 'AdminLogin']);

Route::get('dashboard', [WeblinkController::class, 'Dashboard']);

// admin user management
Route::get('admin_users', [AdminController::class, 'Index']);
Route::get('all_users', [AdminController::class, 'AllUsers']);
Route::post('create_admin_users', [AdminController::class, 'Create']);
Route::get('delete_admin_users{id}', [AdminController::class, 'Delete']);
Route::get('status_admin_users{id}', [AdminController::class, 'ChangeStatus']);
Route::post('/edit_admin_users/{id}', [AdminController::class, 'Edit']);

// admin meal management
Route::get('meal_management', [MealController::class, 'Index']);
Route::post('/create_meal', [MealController::class, 'Create']);
Route::get('delete_meal{id}', [MealController::class, 'Delete']);
Route::get('status_meal{id}', [MealController::class, 'ChangeStatus']);
Route::post('/edit_meal/{id}', [MealController::class, 'Edit']);

// admin goal management
Route::get('goal_management', [GoalManagement::class, 'Index']);
Route::post('/create_goal', [GoalManagement::class, 'Create']);
Route::get('delete_goal{id}', [GoalManagement::class, 'Delete']);
Route::get('status_goal{id}', [GoalManagement::class, 'ChangeStatus']);
// Route::post('/edit_admin_users/{id}', [AdminController::class, 'Edit']);


Route::get('questions_setup', [QuetionSetupController::class, 'Index']);
Route::post('questions_create', [QuetionSetupController::class, 'Create']);
Route::get('delete_question{id}', [QuetionSetupController::class, 'Delete']);
Route::get('status_question{id}', [QuetionSetupController::class, 'ChangeStatus']);

Route::get('pending_request', [WeblinkController::class, 'PendingRequest']);

Route::get('workout_management', [WeblinkController::class, 'WorkoutManagement']);
Route::get('admin_account', [WeblinkController::class, 'Account']);
Route::get('appointments_management', [WeblinkController::class, 'AppointmentManagement']);

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


});

Route::middleware(['auth', 'role:Patient,Doctor,Trainer'])->group(function () {

    Route::get('404', [WeblinkController::class, 'NotFound']);
Route::get('maintenance', [WeblinkController::class, 'Maintenance']);


// ////////////////----Patient----/////////////////////
Route::get('/', [WeblinkController::class, 'Home']);
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


});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //////////////////---User---///////////////
// Route::get('login', [WeblinkController::class, 'Login']);
Route::get('regStart', [WeblinkController::class, 'RegStart']);
Route::get('register_patient', [WeblinkController::class, 'Register']);
Route::get('register_doctor', [WeblinkController::class, 'Register_Doctor']);
Route::get('register_trainer', [WeblinkController::class, 'Register_Trainer']);

Route::post('patientRegister', [RegisterController::class, 'PatientRegister']);
Route::post('doctorRegister', [RegisterController::class, 'DoctorRegister']);
Route::post('trainerRegister', [RegisterController::class, 'TrainerRegister']);
Route::get('userQuestions', [WeblinkController::class, 'RegisterQuestion']);
Route::post('saveUserAnswer', [WeblinkController::class, 'SaveUserAnswer']);


Route::post('userLogin', [LoginController::class, 'UserLogin']);
Route::get('answerFinal', [WeblinkController::class, 'AnswerFinal']);

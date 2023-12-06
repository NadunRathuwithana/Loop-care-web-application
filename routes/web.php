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

Route::get('/', [WeblinkController::class, 'Home']);
Route::get('/workout', [WeblinkController::class, 'Workout']);
Route::get('/singleVideo', [WeblinkController::class, 'SingleVideo']);
Route::get('/appointment', [WeblinkController::class, 'Appointment']);
Route::get('/meals', [WeblinkController::class, 'Meals']);
Route::get('/goals', [WeblinkController::class, 'Goals']);


Route::get('/login', [WeblinkController::class, 'Login']);
Route::get('/regStart', [WeblinkController::class, 'RegStart']);
Route::get('/register', [WeblinkController::class, 'Register']);


//admin

Route::get('/admin', [UserController::class, 'Admin']);

Route::post('/signIn', [UserController::class, 'SignIn']);


Route::middleware('auth:sanctum')->group(function () {

    Route::get('/dashboard', [UserController::class, 'Dashboard']);

    // Define your authenticated routes here
});

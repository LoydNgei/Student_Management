<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MarksController;
use App\Http\Controllers\LecturerController;

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



// COMMON RESOURCE ROUTES

// index - show all listings
// show - show single listings
// create - show form to create new listing
// store - Store new listing
// edit - show form to edit listing
// update - update listing
// destroy - Delete listing



// Login Form
Route::get('/home', [UserController::class, 'showLoginForm']);


// The Login submission

Route::post('/login', [UserController::class, 'loginForm'])->name('login');

// Show Register form

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');


// Register process
Route::post('/register', [UserController::class, 'registerForm'])->name('register');



// Layout

Route::get('/', [LecturerController::class, 'index'])->name('home');


// Missing Mark Form

Route::get('/inquiry', [MarksController::class, 'create'])->name('inquiry');

// Submit the Marks Form

Route::post('/sendquery', [MarksController::class, 'send']);

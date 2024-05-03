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


Route::get('/', function () { return view('welcome');})->name('welcome');

// Login Form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Post login
Route::post('/login', [UserController::class, 'loginpost'])->name('login.post');

// Show Register form
Route::get('/register', [UserController::class, 'registration'])->name('register');

// Post registration
Route::post('/register', [UserController::class, 'registrationpost'])->name('register.post');

// Logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

// Home
Route::get('/home', [LecturerController::class, 'index'])->name('home');


// Missing Mark Form

Route::get('/inquiry', [MarksController::class, 'create'])->name('inquiry');

// Submit the Marks Form

Route::post('/sendquery', [MarksController::class, 'send']);


// Admin authentication routes

Route::post('/adminLogin', [UserController::class, 'adminForm'])->name('admin login');


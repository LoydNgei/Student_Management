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



Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginpost')->name('login.post');
    Route::get('/register', 'registration')->name('register');
    Route::post('/register', 'registrationpost')->name('register.post');
    Route::get('/logout', 'logout')->name('logout');
});


Route::get('/', function () { return view('welcome');})->name('welcome');


// Home
Route::get('/home', [LecturerController::class, 'index'])->name('home');


// Missing Mark Form
Route::get('/inquiry', [MarksController::class, 'create'])->name('inquiry');

// Submit the Marks Form

Route::post('/sendquery', [MarksController::class, 'send']);


// Admin authentication routes

// Route::post('/adminLogin', [UserController::class, 'adminForm'])->name('admin login');


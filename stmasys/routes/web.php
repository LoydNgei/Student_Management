<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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



// Layout

Route::get('/', [LecturerController::class, 'index']);



// Register Form

Route::get('/register', [UserController::class, 'create']);

// Missing Mark Form

Route::get('/enquiry', [MarkContoller::class, 'create']);


// Lecturer 
Route::post('/', [LecturerController::class, 'show']);
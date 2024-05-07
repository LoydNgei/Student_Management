<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InquiryController;
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


// Route::get('/', function () { return view('login'); })->name('login');


// UserController

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'login')->name('login');
    Route::post('/', 'loginpost')->name('login.post');
    Route::get('/register', 'registration')->name('register');
    Route::post('/register', 'registrationpost')->name('register.post');
    Route::get('/logout', 'logout')->name('logout');
});

// LecturerController

Route::controller(LecturerController::class)->group(function () {
    Route::get('/home', 'index')->name('home');
});

// InquiryController

Route::controller(InquiryController::class)->group(function () {
    Route::get('/inquiry', 'inquiry')->name('inquiry');
    Route::post('/inquirypost','inquirypost')->name('inquiry.post');
});


// Admin authentication routes

// Route::post('/adminLogin', [UserController::class, 'adminForm'])->name('admin login');


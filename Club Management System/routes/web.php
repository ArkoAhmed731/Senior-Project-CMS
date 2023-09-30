<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\globalController;
use App\Http\Controllers\LaravelCrud;
use App\Http\Controllers\NewUserRequestsController;
use App\Http\Controllers\approvalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController; // Make sure to include HomeController

// Database connection check
Route::get('/connection', function () {
    try {
        DB::connection()->getPdo();
        return 'connected successfully';
    } catch (\Exception $ex) {
        dd($ex->getMessage());
    }
});

// Forms
Route::post('/form', [formController::class, 'formLoad'])->name("loadForm");

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']); // Removed the name('login') for POST login

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Home route (protected by middleware)
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Global routes
Route::get('/', [globalController::class, 'load_homePage'])->name("homePage");
Route::get('/signup', [globalController::class, 'load_signup'])->name("signup");
Route::post('/signup', [NewUserRequestsController::class, 'store'])->name('signup.store');
Route::get('/forgot-password', [globalController::class, 'load_forgotPassword'])->name("forgotPassword");
Route::get('/club-admin', [globalController::class, 'load_clubAdmin'])->name("clubAdmin");
// ... Other global routes ...

// CRUD routes
Route::post('add', [LaravelCrud::class, 'add']);
Route::get('edit/{id}', [LaravelCrud::class, 'edit']);
Route::post('update', [LaravelCrud::class, 'update'])->name('update');
Route::get('delete/{id}', [LaravelCrud::class, 'delete']);

// Super Admin routes
Route::get('/create-club', [ClubController::class, 'createClubForm'])->name('showCreateForm');
Route::post('/create-club', [ClubController::class, 'createClub'])->name('createClub');

<<<<<<< HEAD

//
// SupAdmin view,edit,delete applications

Route::get('/view-all-applications', [approvalController::class, 'index']);
Route::get('/edit-application/{id}', [approvalController::class, 'edit']);
//Route::post('update', [approvalController::class, 'update'])->name('update');
Route::get('delete/{id}', [approvalController::class, 'delete']);
=======
Route::get('/view-all-applications', [approvalController::class, 'index']);
>>>>>>> 2b3496189e78730eca5b3a75e2777208074cdf7e

// Application routes
Route::get('/applications/create', [ApplicationInfoController::class, 'create'])->name('applications.create');
Route::post('/applications', [ApplicationInfoController::class, 'store'])->name('applications.store');

// Approval progress routes
Route::get('/application-approval-progress/{id}', [approvalController::class, 'calculateProgress']);
Route::get('/post-approval/{id}', [approvalController::class, 'postApproval']);
Route::post('approve_update', [approvalController::class, 'approve_update'])->name('approve_update');
<<<<<<< HEAD

//////////////////////////////////


// Create,edit Upcoming Events
Route::get('/clubEvents/createEvent', [EventsController::class, 'create'])->name('clubEvents.createEvent');
=======
>>>>>>> 2b3496189e78730eca5b3a75e2777208074cdf7e

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\globalController;
use App\Http\Controllers\LaravelCrud;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Database connection check
Route::get('/connection', function () {
    try {
        DB::connection()->getPdo();
        return 'connected successfully';
    } catch (\Exception $ex) {
        dd($ex->getMessage());
    }
});

//forms 
Route::post('/form', [formController::class, 'formLoad'])->name("loadForm");


//global
Route::get('/', [globalController::class, 'load_homePage'])->name("homePage");
Route::get('/login', [globalController::class, 'load_login'])->name("login");
Route::get('/signup', [globalController::class, 'load_signup'])->name("signup");
Route::get('/forgot-password', [globalController::class, 'load_forgotPassword'])->name("forgotPassword");
Route::get('/club-admin', [globalController::class, 'load_clubAdmin'])->name("clubAdmin");




Route::get('/upcoming-events', [globalController::class, 'load_upcomingEvents'])->name("upcomingEvents");
Route::get('/event-post', [globalController::class, 'load_eventPost'])->name("eventPost");
Route::get('/club-recruitment', [globalController::class, 'load_clubRecruitment'])->name("clubRecruitment");
Route::get('/recruitment-post', [globalController::class, 'load_recruitmentPost'])->name("recruitmentPost");

Route::get('/my-clubs', [globalController::class, 'load_myClubs'])->name("myClubs");
Route::get('/my-profile', [globalController::class, 'load_myProfile'])->name("myProfile");
Route::get('/edit-my-profile', [globalController::class, 'load_editMyProfile'])->name("editMyProfile");
Route::get('/view-profile', [globalController::class, 'load_viewProfile'])->name("viewProfile");

Route::get('/approval-progress', [globalController::class, 'load_approvalProgress'])->name("approvalProgress");
Route::get('/private-test', [globalController::class, 'load_privateTest'])->name("privateTest");
Route::get('/apply-for-event', [globalController::class, 'load_applyForEvent'])->name("applyForEvent");
Route::get('/post-approval', [globalController::class, 'load_postApproval'])->name("postApproval");

Route::get('/club-activities', [globalController::class, 'load_clubActivities'])->name("clubActivities");
Route::get('/view-post', [globalController::class, 'load_viewPost'])->name("viewPost");
Route::get('/test', [globalController::class, 'load_test'])->name("test");
Route::get('/create-post', [globalController::class, 'load_createPost'])->name("createPost");

Route::get('/notification', [globalController::class, 'load_notification'])->name("notification");


//crud test all
// Route::get('crud', [LaravelCrud::class, 'index']);
Route::post('add', [LaravelCrud::class, 'add']);
Route::get('edit/{id}', [LaravelCrud::class, 'edit']);
Route::post('update', [LaravelCrud::class, 'update'])->name('update');
Route::get('delete/{id}', [LaravelCrud::class, 'delete']);

Route::post('crud/{id}', [LaravelCrud::class, 'index']);
Route::get('crud/{id}', [LaravelCrud::class, 'index']);




//user

//club admin

//footer



// Super Admin

use App\Http\Controllers\ClubController;

Route::get('/create-club', [ClubController::class, 'createClubForm'])->name('showCreateForm');
Route::post('/create-club', [ClubController::class, 'createClub'])->name('createClub');


use App\Http\Controllers\ApplicationController;

Route::get('/applications/create', [ApplicationController::class, 'create'])->name('applications.create');
Route::post('/applications/store', [ApplicationController::class, 'store'])->name('applications.store');


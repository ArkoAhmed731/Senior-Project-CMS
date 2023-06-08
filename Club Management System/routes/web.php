<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\globalController;

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



//forms 
Route::post('/form', [formController::class, 'formLoad'])->name("loadForm");


//global
Route::get('/', [globalController::class, 'load_homePage'])->name("homePage");
Route::get('/login', [globalController::class, 'load_login'])->name("login");
Route::get('/signup', [globalController::class, 'load_signup'])->name("signup");
Route::get('/forgot-password', [globalController::class, 'load_forgotPassword'])->name("forgotPassword");



Route::get('/upcoming-events', [globalController::class, 'load_upcomingEvents'])->name("upcomingEvents");
Route::get('/event-post', [globalController::class, 'load_eventPost'])->name("eventPost");
Route::get('/club-recruitment', [globalController::class, 'load_clubRecruitment'])->name("clubRecruitment");
Route::get('/recruitment-post', [globalController::class, 'load_recruitmentPost'])->name("recruitmentPost");

Route::get('/my-clubs', [globalController::class, 'load_myClubs'])->name("myClubs");
Route::get('/my-profile', [globalController::class, 'load_myProfile'])->name("myProfile");

Route::get('/approval-progress', [globalController::class, 'load_approvalProgress'])->name("approvalProgress");
Route::get('/private-test', [globalController::class, 'load_privateTest'])->name("privateTest");
Route::get('/apply-for-event', [globalController::class, 'load_applyForEvent'])->name("applyForEvent");
Route::get('/post-approval', [globalController::class, 'load_postApproval'])->name("postApproval");

Route::get('/club-activities', [globalController::class, 'load_clubActivities'])->name("clubActivities");
Route::get('/view-post', [globalController::class, 'load_viewPost'])->name("viewPost");
Route::get('/test', [globalController::class, 'load_test'])->name("test");
Route::get('/create-post', [globalController::class, 'load_createPost'])->name("createPost");








//user

//club admin

//footer

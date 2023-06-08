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
Route::get('/upcoming-events', [globalController::class, 'load_upcomingEvents'])->name("upcomingEvents");
Route::get('/event-post', [globalController::class, 'load_eventPost'])->name("eventPost");
Route::get('/club-recruitment', [globalController::class, 'load_clubRecruitment'])->name("clubRecruitment");
Route::get('/recruitment-post', [globalController::class, 'load_recruitmentPost'])->name("recruitmentPost");

Route::get('/my-clubs', [globalController::class, 'load_myClubs'])->name("myClubs");

Route::get('/approval-progress', [globalController::class, 'load_approvalProgress'])->name("approvalProgress");
Route::get('/private-test', [globalController::class, 'load_privateTest'])->name("privateTest");
Route::get('/apply-for-event', [globalController::class, 'load_applyForEvent'])->name("applyForEvent");
Route::get('/post-approval', [globalController::class, 'load_postApproval'])->name("postApproval");

Route::get('/club-activities', [globalController::class, 'load_clubActivities'])->name("clubActivities");
Route::get('/view-post', [globalController::class, 'load_viewPost'])->name("viewPost");

Route::get('/test', [globalController::class, 'load_test'])->name("test");
Route::get('/test2', [globalController::class, 'load_test2'])->name("test2");








//user

//club admin

//footer

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class globalController extends Controller
{


    public function load_homePage()
    {
        return view('home');
    }

    public function load_login()
    {
        return view('login/login');
    }

    public function load_signup()
    {
        return view('login/signup');
    }

    public function load_forgotPassword()
    {
        return view('login/forgotPassword');
    }

    public function load_clubAdmin()
    {
        return view('clubAdmin');
    }

    public function load_myClubs()
    {


        return view('myClubs/myclubs');
    }

    public function load_approvalProgress()
    {


        return view('applicationApproval/approvalProgress');
    }



    public function load_privateTest()
    {
        

        // $applications = DB::table('applications')->get();

        // return view('applicationApproval/privateTest', ['applications' => $applications]);
    }

    // Not yet connected... Only used in testing phase.. Can delete if not needed
    // public function load_chooseClub()
    // {
    //     $club_names = DB::table('club_list')->select('club_id','club_name')->get();
    //     $selectedID = 2;

    //     return view('applicationApproval/privateTest', compact('club_names', 'selectedID'));
    // }

    public function load_applyForEvent()
    {


        return view('applicationApproval/applyForEvent');
    }

    public function load_clubActivities()
    {
        return view('myClubs/clubActivities');
    }

    public function load_postApproval()
    {
        return view('applicationApproval/postApproval');
    }

    public function load_upcomingEvents()
    {


        return view('clubEvents/upcomingEvents');
    }

    public function load_eventPost()
    {
        return view('clubEvents/eventPost');
    }

    public function load_clubRecruitment()
    {
        return view('recruitment/clubRecruitment');
    }

    public function load_recruitmentPost()
    {
        return view('recruitment/recruitmentPost');
    }

    public function load_test()
    {
        return view('test');
    }

    public function load_createPost()
    {
        return view('applicationApproval/createPost');
    }

    public function load_myProfile()
    {
        $userName = Auth::user()->user_name;

        $data = [DB::table('users')
        ->where('user_id', $userName)
        ->get()];

        return view('general.myProfile', $data);
    }

    public function load_editMyProfile()
    {
        return view('myClubs/editMyProfile');
    }

    public function load_viewPost()
    {
        return view('myClubs/viewPost');
    }

    public function load_viewProfile()
    {
        return view('myClubs/viewProfile');
    }

    public function load_notification()
    {
        return view('notification');
    }
}

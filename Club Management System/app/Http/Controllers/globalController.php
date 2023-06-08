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


        return view('applicationApproval/privateTest');
    }

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
        return view('myClubs/myProfile');
    }


    public function load_viewPost()
    {


        return view('myClubs/viewPost');
    }
}
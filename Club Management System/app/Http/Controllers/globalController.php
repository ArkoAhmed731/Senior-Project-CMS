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
    public function load_viewPost()
    {


        return view('myClubs/viewPost');
    }
}

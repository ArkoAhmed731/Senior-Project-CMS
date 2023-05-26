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


}

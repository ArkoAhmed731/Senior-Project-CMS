<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class approvalController extends Controller
{
    //
    function index()
    {
        $applications = DB::table('applications')->get();

        return view('applicationApproval/privateTest', ['applications' => $applications]);
    }

    function testProgress()
    {

        return view('applicationApproval/testProgress');
    }


}

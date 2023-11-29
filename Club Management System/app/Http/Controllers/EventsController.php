<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function load_upcomingEvents()
    {
        // Fetch upcoming events from the post_info table
        $upcomingEvents = DB::table('post_info')
            ->where('post_date', '>', now())
            ->orderBy('post_date')
            ->get();

        return view('clubEvents.upcomingEvents', ['upcomingEvents' => $upcomingEvents]);
    }

    
}

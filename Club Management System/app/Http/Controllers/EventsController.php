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

    public function loadContent($contentType)
    {
        switch ($contentType) {
            case 'Upcoming Events':
                $content = DB::table('post_info')
                    ->where('post_date', '>', now())
                    ->orderBy('post_date')
                    ->get();
                break;

            case 'Workshops':
                $content = DB::table('post_info')
                    ->where('post_type', 'Workshop')
                    ->orderBy('post_date')
                    ->get();
                break;
                
            case 'Club Recruitements':
                $content = DB::table('post_info')
                    ->where('post_type', 'Recruitement')
                    ->orderBy('post_date')
                    ->get();
                break;

            // Add more cases for other content types as needed

            default:
                abort(404); // Handle cases where an invalid content type is provided
                break;
        }

        return view('clubEvents.viewEvents', ['content' => $content, 'contentType' => $contentType]);
    }

    public function load_event($post_id)
    {
        // Fetch upcoming events from the post_info table
        $post = DB::table('post_info')
            ->where('post_id', $post_id)
            ->first();

        return view('clubEvents.eventPost', ['post' => $post]);
    }

    
}

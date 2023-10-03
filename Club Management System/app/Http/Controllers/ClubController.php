<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClubController extends Controller
{
    public function createClubForm()
    {
        return view('create_new_club');
    }

    public function createClub(Request $request)
    {
        $clubName = $request->input('club_name');
        $clubID = $request->input('club_id');
        
        // $request->validate([
        //     'club_id'=>'required',
        //     'club_name'=>'required'
        // ]);

        // Create the table if it doesn't exist
        if (!Schema::hasTable($clubName)) {

            $query = DB::table('club_list')->insert([
                'club_id'=>$clubID,
                'club_name'=>$clubName
            ]);
            

            Schema::create($clubName, function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedBigInteger('user_id');
                $table->string('user_name');
                $table->string('user_email');
                $table->string('contact_number');
                $table->enum('gender', ['male', 'female', 'other']);
                $table->string('club_position');
                $table->timestamps();
            });

            

            // Set success message in the session
            Session::flash('message', "Club '$clubName' table created successfully!");
        } else {
            // Set error message in the session
            Session::flash('error', "Club '$clubName' '$clubID' table already exists!");
        }

        return redirect()->route('showCreateForm');
    }


    ///////////////
    // Club admin functions
    //////////////


    public function load_manageMembers()
    {
        $clubName = Auth::user()->user_name;

        $data = array(
            'list' => DB::table($clubName)->get()
        );
        // return view('myClubs\manage-members', $data, compact('clubName'));
        return view ('myClubs.manageMembers', $data);
    }

    
    function deleteMember($id){

        $clubName = Auth::user()->user_name;

        $delete = DB::table('clubName')
            ->where('user_id', $id)
            ->delete();

        return back();
    }

    
    function load_addMembers(){

        return view ('myClubs/addMembers');
    }

    public function store(Request $request)
    {
        $clubName = Auth::user()->user_name;

        // Assuming $data contains the fields you want to insert
        $data = $request->all();

        // Use the DB facade to insert data into the dynamically determined table
        DB::table($clubName)->insert([
            'field1' => $data['field1'], 
            'field2' => $data['field2'],
            
        ]);

        return redirect()->back()->with('success', 'Member added successfully.');
    }

}

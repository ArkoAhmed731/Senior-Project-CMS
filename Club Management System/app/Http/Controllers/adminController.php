<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\MonthlyUsersChart;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function load_manageUsers()
    {

        $data = array(
            'list' => DB::table('users')->get()
        );
        

        return view ('superAdmin.manageUsers', $data);
    }

    
    function deleteUser($id){

        $delete = DB::table('users')
            ->where('user_id', $id);

        $delete->delete();

        return back();
    }

    
    function load_addUser(){

        return view ('superAdmin.addUser');
    }

    public function addNewUser(Request $request)
    {

        $data = $request->all();
      
        $request->validate([
            'user_id'=>'required',
            'user_name'=>'required',
            'user_email'=>'required|email|unique:users',
            'contact_number'=>'required',
            'gender'=>'required',      
            'user_type'=>'required'
        ]);

        DB::table('users')->insert([
            'user_id' => $data['user_id'], 
            'user_name' => $data['user_name'],
            'user_email' => $data['user_email'],
            'password' => $data['password'],
            'contact_number' => $data['contact_number'],
            'gender' => $data['gender'],
            'bio' => $data['bio'],
            'user_type' => $data['user_type'],
            
        ]);

        return redirect()->back()->with('success', 'User added successfully.');
    }

    function load_editUser($id){

        $row = DB::table('users')
            ->where('user_id', $id)
            ->first();
        
        $data = [
            'Info'=> $row
        ];

        return view ("superAdmin/editUser", $data);
    }


    function updateUser(Request $request){
        $request->validate([
            'user_id'=>'required',
            'user_name'=>'required',
            'user_email'=>'required',
            'contact_number'=>'required',
            'gender'=>'required',      
            'user_type'=>'required'
        ]);


        $updating = DB::table('users')
            ->where('user_id', $request->input('user_id'))
            ->update([
                'user_id'=> $request->input('user_id'),
                'user_name'=> $request->input('user_name'),
                'user_email'=> $request->input('user_email'),
                'contact_number'=> $request->input('contact_number'),
                'gender'=> $request->input('gender'),
                'bio'=> $request->input('bio'),
                'user_type'=> $request->input('user_type')
            ]);
            
        return redirect()->route('manageUsers')->with('success', 'Successfull!');
    }

    //////////////////////////////
    ///////////////////////////
    // New User Requests


    public function load_newUserRequests()
    {

        $data = array(
            'list' => DB::table('new_user_requests')->get()
        );
        

        return view ('superAdmin.newUserRequests', $data);
    }

    //////////////////////////////
    ///////////////////////////
    // CLUBS

    public function load_manageClubs()
    {

        $data = array(
            'list' => DB::table('club_list')->get()
        );
        

        return view ('superAdmin.manageClubs', $data);
    }

    
    function deleteClub($id){

        $delete = DB::table('club_list')
            ->where('club_id', $id);

        $delete->delete();

        return back();
    }

    function load_editClub($id){

        $row = DB::table('club_list')
            ->where('club_id', $id)
            ->first();
        
        $data = [
            'Info'=> $row
        ];

        return view ('superAdmin.editClub', $data);
    }


    function updateClub(Request $request){
        $request->validate([
            'club_id'=>'required|email|unique:club_list',
            'club_name'=>'required'
        ]);


        $updating = DB::table('club_list')
            ->where('club_id', $request->input('club_id'))
            ->update([
                'club_id'=> $request->input('club_id'),
                'club_name'=> $request->input('club_name')
            ]);
            

        return back() ->with('success', 'Successfull!');
    }
}

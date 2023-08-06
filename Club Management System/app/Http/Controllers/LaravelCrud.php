<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
    //
    function index($club_name)
    {
        $data = array(
            'list' => DB::table($club_name)->get()
        );


        return view('crud.index', $data, compact('club_name'));
    }

    function getClub(Request $request)
    {
        $club_name = $request->input('select_club');

        return view('crud.index', $club_name);
    }

    function add(Request $request) 
    {
        // return $request->input();

        $request->validate([
            'user_id'=>'required',
            'user_name'=>'required',
            'user_email'=>'required|email|unique',
            'contact_number'=>'required'
        ]);

        $query = DB::table($club_name)->insert([
            'user_id'=>$request->input('user_id'),
            'user_name'=>$request->input('user_name'),
            'user_email'=>$request->input('user_email'),
            'contact_number'=>$request->input('contact_number'),
            'gender'=>$request->input('gender'),
            'club_position'=>$request->input('club_position')
        ]);

        if ($query){
            return back() ->with('success', 'Successfull!!!!');
        }else{
            return back() ->with('fail', 'FAIL!');
        }

    }

    function edit($id){
        
        $row = DB::table('club2')
            ->where('id', $id)
            ->first();
        $data = [
            'Info'=> $row,
            'Title'=> 'Edit'
        ];

        return view ('crud.edit', $data);

        

    }

    function update(Request $request){
        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'email'=>'required|email|unique:club2',
            'contact'=>'required'
        ]);

        $updating = DB::table('club2')
            ->where('id', $request->input('id'))
            ->update([
                'id'=> $request->input('id'),
                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'contact'=> $request->input('contact'),
                'gender'=> $request->input('gender'),
                'position'=> $request->input('position')
            ]);
            
            return redirect('crud');

    }

    function delete($id){

        $delete = DB::table('club2')
            ->where('id', $id)
            ->delete();

        return redirect('crud');
    }


}

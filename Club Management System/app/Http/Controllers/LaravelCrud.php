<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
    //
    function index()
    {
        $data = array(
            'list' => DB::table('club2')->get()
        );

        return view('crud.index', $data);
    }

    function add(Request $request) 
    {
        // return $request->input();

        $request->validate([
            'id'=>'required',
            'name'=>'required',
            'email'=>'required|email|unique:club2',
            'contact'=>'required'
        ]);

        $query = DB::table('club2')->insert([
            'id'=>$request->input('id'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'contact'=>$request->input('contact'),
            'gender'=>$request->input('gender'),
            'position'=>$request->input('position')
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

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
        return view('crud.index');
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


}

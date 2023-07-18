<?php

namespace App\Http\Controllers;

use App\Models\Club1;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Club1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = Club1::latest()->paginate(5);

        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'student_id'         =>  'required',
            'student_name'          =>  'required',
            'student_email'         =>  'required|email|unique:club1'
        ]);

        $club1 = new Club1;

        $club1->student_id = $request->student_id;
        $club1->student_name = $request->student_name;
        $club1->student_email = $request->student_email;
        $club1->contact_number = $request->contact_number;
        $club1->student_gender = $request->student_gender;
        $club1->club_position = $request->club_position;

        $club1->save();

        return redirect()->route('club1.index')->with('success', 'Student Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club1  $club1
     * @return \Illuminate\Http\Response
     */
    public function show(Club1 $club1)
    {
        //
        return view('show', compact('club1'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club1  $club1
     * @return \Illuminate\Http\Response
     */
    public function edit(Club1 $club1)
    {
        //
        return view('edit', compact('club1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club1  $club1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club1 $club1)
    {
        //
        $request->validate([
            'student_id'         =>  'required',
            'student_name'          =>  'required',
            'student_email'         =>  'required|email|unique:club1'
        ]);

        $club1 = Student::find($request->hidden_id);

        $club1->student_id = $request->student_id;

        $club1->student_name = $request->student_name;

        $club1->student_email = $request->student_email;

        $club1->contact_number = $contact_number;

        $club1->student_gender = $request->student_gender;

        $club1->club_position = $club_position;

        $club1->save();

        return redirect()->route('club1.index')->with('success', 'Student Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club1  $club1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club1 $club1)
    {
        //

        $club1->delete();

        return redirect()->route('club1.index')->with('success', 'Student Data deleted successfully');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application; // Make sure to use the correct namespace for the Application model

class ApplicationController extends Controller
{
    public function create()
    {
        return view('applications.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'application_title' => 'required|max:200',
            'application_type' => 'required',
            'application_date' => 'required|date',
            'application_description' => 'required|max:2000',
            'applicant_name' => 'required',
        ]);

        Application::create($validatedData);

        return redirect()->route('applications.create')->with('success', 'Application submitted successfully!');
    }
}

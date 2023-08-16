<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application; 
use Illuminate\Support\Facades\DB;




class ApplicationController extends Controller
{
    private static $tableCounter = 0;

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
        'departments' => 'required|array|min:1',
    ], [
        'application_title.required' => 'The application title is required.',
        'application_title.max' => 'The application title must not exceed 200 characters.',
        'application_type.required' => 'The application type is required.',
        'application_date.required' => 'The application date is required.',
        'application_date.date' => 'The application date must be a valid date.',
        'application_description.required' => 'The application description is required.',
        'application_description.max' => 'The application description must not exceed 2000 characters.',
        'applicant_name.required' => 'The applicant name is required.',
        'departments.required' => 'At least one department must be selected.',
        'departments.array' => 'Invalid format for departments.',
        'departments.min' => 'At least one department must be selected.',
    ]);

    $application = Application::create($validatedData);

    // Get the application_id value using lastInsertId
    $applicationId = $application->getConnection()->getPdo()->lastInsertId();

    // Create a dynamic table for the application
    $tableName = 'application_' . $applicationId;

    $columns = '';
    foreach ($validatedData['departments'] as $department) {
        $columns .= ", {$department}_status ENUM('pending', 'approved', 'declined') DEFAULT 'pending',
                 {$department}_response VARCHAR(200)";
    }

    // Create the table using raw SQL query
    DB::statement("CREATE TABLE {$tableName} (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY{$columns},
        created_at TIMESTAMP NULL,
        updated_at TIMESTAMP NULL
    )");

    return redirect()->route('applications.create')->with('success', 'Application submitted successfully!');
    }

}

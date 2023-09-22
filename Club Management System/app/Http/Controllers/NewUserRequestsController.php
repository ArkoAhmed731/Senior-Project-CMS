<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\NewUserRequest;
use Illuminate\Support\Facades\Session;


class NewUserRequestsController extends Controller
{
    public function signup()
{
    return view('signup'); // Assuming 'signup' is the name of your signup view
}
    
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'user_id' => 'required|string|max:255|unique:new_user_requests',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:new_user_requests',
            'contact_number' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);
    
        // Create a new instance of the model and fill it with the validated data
        $newUserRequest = new NewUserRequest;
        $newUserRequest->fill($validatedData);
    
        // Hash the password before saving it to the database (for security)
        $newUserRequest->password = bcrypt($request->input('password'));
    
        // Save the data to the database
        $newUserRequest->save();
    
        // Optionally, you can send a response or redirect to a success page
        Session::flash('success', 'Account created successfully. We\'ll send you an email shortly after verifying your data.');

        return redirect('/login')->with('success', 'Your request has been submitted.');
    }
    }

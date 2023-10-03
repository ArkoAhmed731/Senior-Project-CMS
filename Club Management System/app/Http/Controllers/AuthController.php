<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('login.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        // Attempt to find a user with the provided email
        $user = User::where('user_email', $credentials['email'])->first();
    
        if ($user && $user->password === $credentials['password']) {
            // Authentication passed
            auth()->login($user); // Manually log in the user
            return redirect()->route('home');
        }
    
        // Authentication failed, redirect back with error
        return back()->withErrors(['email' => 'Invalid login credentials']);
    }
    

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
    
        $request->session()->invalidate();
    
        return $this->loggedOut($request) ?: redirect('/login');
    }

    // public function getRole(Request $request)
    // {
    //     $role = auth()->user()->user_type;

    //     return ($role);

    // }
    
}

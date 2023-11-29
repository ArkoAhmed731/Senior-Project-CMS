<?php

// namespace App\Http\Controllers;

// use Carbon\Carbon;
// use GrahamCampbell\ResultType\Success;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;

// class userController extends Controller
// {
//     public function __construct()
//     {
//         $this->middleware('userAuth');
//     }

 
// }


// UserController.php

// UserController.php

// UserController.php

// UserController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Show the user's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    /**
     * Update the user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'contact_number' => 'nullable|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'bio' => 'nullable|string|max:500',
        ]);

        // Update user fields
        $user->contact_number = $request->input('contact_number', $user->contact_number);
        $user->bio = $request->input('bio', $user->bio);

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }



    public function updateProfilePicture(Request $request)
    {

        $userID = Auth::user()->user_id;

        $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:20480', // 20MB limit
        ]);


        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');

            if ($file->isValid()) {
                $filename = $userID;

                $extension = $file->getClientOriginalExtension();
                $newFilename = "{$filename}.{$extension}";


                // Delete any existing file with the same name (ignoring extension)
                // .* checks for all extensions
                $existingFiles = glob(public_path("images/users/{$filename}.*"));
                foreach ($existingFiles as $existingFile) {
                    unlink($existingFile);
                }
                
                // save new picture
                $file->move(public_path('images/users'), $newFilename);

            return redirect()->back()->with('success', 'Profile picture updated successfully');

            } else {
                return redirect()->back()->with('error', 'Invalid file.');
            }
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }


}

<!-- profile.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Include Bootstrap CSS (adjust the path as needed) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Include your custom CSS file -->
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        

                        <div class="text-center mb-4">
                            <div class="profile-picture">
                                <div class = "profile-img">
                                    <?php
                                    $userId = Auth::user()->user_id;
                                    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
                                    // $profilePicturePath = public_path('images/users/' . $user_id . '.png');
                                    $profilePicturePath = null;
                                    foreach ($imageExtensions as $extension) {
                                        $potentialPath = public_path("images/users/{$userId}.{$extension}");
                                        if (File::exists($potentialPath)) {
                                            $profilePicturePath = asset("images/users/{$userId}.{$extension}");
                                            break;
                                        }
                                    }
                                    ?>
                                    
                                    @if($profilePicturePath)
                                        <img src="{{ $profilePicturePath }}" class="rounded-circle" alt="Profile Picture">
                                        <!-- <img src="{{ asset('images/users/1883002.jpg') }}" class="rounded-circle" alt="Default Profile Picture"
                                        style="max-width: 100%; max-height: 100%; width: auto; height: auto; border-radius: 50%;"> -->
                                    @else
                                        <img src="{{ asset('images/users/user_default.png') }}" class="rounded-circle" alt="Default Profile Picture"
                                        style="max-width: 100%; max-height: 100%; width: auto; height: auto; border-radius: 50%;">
                                    @endif
                                </div>
                                <label for="profile_picture" class="btn btn-primary mt-2">Upload Picture</label>
                                <input type="file" class="form-control-file" id="profile_picture" name="profile_picture" style="display: none;">
                                
                            </div>
                        </div>

                        <form method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Display user information (non-editable) -->
                            <div class="form-group">
                                <label for="user_id">{{ __('User ID') }}</label>
                                <input id="user_id" type="text" class="form-control" value="{{ $user->user_id }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="user_name">{{ __('User Name') }}</label>
                                <input id="user_name" type="text" class="form-control" value="{{ $user->user_name }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="user_email">{{ __('User Email') }}</label>
                                <input id="user_email" type="text" class="form-control" value="{{ $user->user_email }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="gender">{{ __('Gender') }}</label>
                                <input id="gender" type="text" class="form-control" value="{{ $user->gender }}" disabled>
                            </div>

                            <!-- Editable fields -->
                            <div class="form-group">
                                <label for="contact_number">{{ __('Contact Number') }}</label>
                                <input id="contact_number" type="text" class="form-control" name="contact_number"
                                    value="{{ old('contact_number', $user->contact_number) }}">
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('New Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm New Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>

                            <div class="form-group">
                                <label for="bio">{{ __('Bio') }}</label>
                                <textarea id="bio" class="form-control" name="bio">{{ old('bio', $user->bio) }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update Profile') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS (adjust the path as needed) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // JavaScript to trigger file input when clicking on the "Upload Picture" button
        document.getElementById('profile_picture').addEventListener('click', function() {
            document.getElementById('profile_picture').click();
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/applyForEvent.css') }}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
 
    <div class="site-wrap">
        {{-- nav bar --}}
        @include('menu.navBar')
        {{-- nav bar end --}}

        <div class="right-container bg-light p-4 mx-auto mt-5">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

                <div class="text-center mb-4">
                    <div class="profile-picture">
                        <div class="profile-img">
                            <?php
                            $userId = Auth::user()->user_id;
                            $imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
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
                                <img src="{{ $profilePicturePath }}" class="rounded-circle" alt="Profile Picture"
                                    style="max-width: 100%; max-height: 100%; width: auto; height: auto; border-radius: 50%;">
                            @else
                                <img src="{{ asset('images/users/user_default.png') }}" class="rounded-circle"
                                    alt="Default Profile Picture"
                                    style="max-width: 100%; max-height: 100%; width: auto; height: auto; border-radius: 50%;">
                            @endif
                        </div>

                        <form id="profilePictureForm" action="{{ route('updateProfilePicture') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <label for="profile_picture" class="btn btn-outline-info mt-2">Upload Picture</label>
                            <input type="file" class="form-control-file" id="profile_picture" name="profile_picture"
                                style="display: none;" onchange="submitForm()">
                        </form>
                    </div>
                </div>

                <form method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Display user information (non-editable) -->
                    <div class="form-group">
                        <label for="user_id">User ID</label>
                        <input id="user_id" type="text" class="form-control" value="{{ $user->user_id }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input id="user_name" type="text" class="form-control" value="{{ $user->user_name }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="user_email">Email</label>
                        <input id="user_email" type="text" class="form-control" value="{{ $user->user_email }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input id="gender" type="text" class="form-control" value="{{ $user->gender }}" disabled>
                    </div>

                    <!-- Editable fields -->
                    <div class="form-group">
                        <label for="bio">Bio (optional)</label>
                        <textarea id="bio" class="form-control" name="bio">{{ old('bio', $user->bio) }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="contact_number">Contact Number</label>
                        <input id="contact_number" type="text" class="form-control" name="contact_number"
                            value="{{ old('contact_number', $user->contact_number) }}">
                    </div>

                    <a data-toggle="collapse" href="#changePasswordSection" role="button" aria-expanded="false" aria-controls="changePasswordSection">
                        Change Password
                    </a>

                    <div class="collapse border p-3" id="changePasswordSection">
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input id="password" type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirm New Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-info">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function submitForm() {
            document.getElementById("profilePictureForm").submit();
        }
    </script>
    <script src="../../js/image_upload.js"></script>
    <script src="../../js/image_store.js"></script>

    {{-- footer --}}
    @include('menu.footer')
    {{-- footer end --}}

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

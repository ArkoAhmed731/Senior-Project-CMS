<!DOCTYPE html>
<html>
<head>
    <title>Create Application</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <!-- Include your custom CSS files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="site-wrap">
        {{-- Nav Bar --}}
        @include('menu.navBar')
        <div class="p-5 w-75 mx-auto shadow p-3 bg-white rounded">
            <h1 class="text-center">Add User</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('superAdmin.addNewUser') }}">
                @csrf
                <div class="form-group">
                    <label for="user_id">User ID</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="User Id" required>
                </div>
                <div class="form-group">
                    <label for="user_id">User Name</label>
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="User name" required>
                </div>
                <div class="form-group">
                    <label for="user_id">E-mail address</label>    
                    <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="user_id">Password</label>    
                    <input type="text" class="form-control" id="password" name="password" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="user_id">Re-write Password</label>    
                    <input type="text" class="form-control" id="rePassword" name="rePassword" placeholder="" required>
                </div>
                <div class="form-group">
                    <label for="user_id">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" required>
                </div>
                
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        {{-- <option value="Other">Other</option> --}}
                    </select>
                </div>

                <div class="form-group">
                    <label for="user_type">User Type</label>
                    <select class="form-control" id="user_type" name="user_type" required>
                        <option value="">Select User type</option>
                        <option value="general">general</option>
                        <option value="official">official</option>
                        <option value="club admin">club admin</option>
                    </select>
                </div>

                <!-- <div class="form-group" id="clubAdminOptions" style="display: none;">
                    <label for="club_admin_data">Select Club</label>
                    <select class="form-control" id="club_admin_data" name="club_admin_data"> -->
                        <!-- Options will be dynamically populated through AJAX -->
                    <!-- </select>
                </div> -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-info">Add User</button>
                </div>
            </form>
            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
    {{-- Include Footer --}}
    @include('menu.footer')

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

</body>
</html>

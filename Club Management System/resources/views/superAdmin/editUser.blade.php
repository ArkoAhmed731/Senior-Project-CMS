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
            <h1 class="text-center">Edit Member Details</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('superAdmin.updateUser', $Info->user_id) }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $Info->user_id }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $Info->user_name }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="user_email" name="user_email" value="{{ $Info->user_email }}" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $Info->contact_number }}" required>
                </div>
                

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="male" {{ $Info->gender === "male" ? "selected" : "" }}>Male</option>
                        <option value="female" {{ $Info->gender === "female" ? "selected" : "" }}>Female</option>
                        {{-- <option value="other" {{ $Info->gender === "other" ? "selected" : "" }}>Other</option> --}}
                    </select>
                </div>

                <div class="form-group">
                    <label for="user_type">User Type</label>
                    <select class="form-control" id="user_type" name="user_type" required>
                        <option value="general" {{ $Info->user_type === "general" ? "selected" : "" }}>general</option>
                        <option value="official" {{ $Info->user_type === "Normal" ? "selected" : "" }}>official</option>
                        <option value="club admin" {{ $Info->user_type === "club admin" ? "selected" : "" }}>club admin</option>
                    </select>
                </div>
                
                

                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-info">Save Information</button>
                    
                </div>
                <button action = "{{ route('manageUsers') }}" type="button" class="btn btn-primary bg-danger">Cancel</button>
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

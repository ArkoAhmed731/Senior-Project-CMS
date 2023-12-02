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
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/manageUsers.css">
    <link rel="stylesheet" href="../../css/style.css">
    
</head>
<body>
    <div class="site-wrap pb-5">

        {{-- nav bar --}}

        @include('menu.navBar')
        {{-- nav bar end --}}

        <div class = "he ml-3 mr-3">{{ $clubName }}</div>
        <div class="p-5 w-50 mx-auto my-auto shadow-lg bg-white rounded-lg">
            <h3 class="text-center"> Add a New Member</h3>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('club.addNewMember') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" id="member_id" name="member_id" placeholder="Member Id" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="member_name" name="member_name" placeholder="Member name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" required>
                </div>
                
                <div class="form-group">
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="form-control" id="club_position" name="club_position" required>
                        <option value="">Position in Club</option>
                        <option value="Normal">Normal</option>
                        <option value="Treasurer">Treasurer</option>
                        <option value="Vice President">Vice President</option>
                        <option value="President">President</option>
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-info">Add Member</button>
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

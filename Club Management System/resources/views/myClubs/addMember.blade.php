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
            <h1 class="text-center">Add Member</h1>
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
                

                <!-- Application Type (Combo Box) -->
                <div class="form-group">
                    <label for="application_type">Application Type</label>
                    <select class="form-control" id="application_type" name="application_type" required>
                        <option value="">Select Application Type</option>
                        <option value="General application">General Application</option>
                        <option value="Seminar">Seminar</option>
                        <option value="Festival">Festival</option>
                        <option value="Exhibitions">Exhibitions</option>
                        <option value="Workshop">Workshop</option>
                        <option value="Sports">Sports</option>
                        <option value="Competition">Competition</option>
                        <option value="Charity">Charity</option>
                        <option value="Show">Show</option>
                        <option value="Party">Party</option>
                        <option value="Cultural">Cultural</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <!-- Application Date -->
                <div class="form-group">
                    <input type="date" class="form-control" id="application_date" name="application_date" placeholder="Application Date" required>
                </div>
                <!-- Application Description -->
                <div class="form-group">
                    <textarea class="form-control" id="application_description" name="application_description" placeholder="Application Description" required></textarea>
                </div>
                <!-- Applicant Name -->
                <div class="form-group">
                    <input type="text" class="form-control" id="applicant_name" name="applicant_name" placeholder="Applicant Name" required>
                </div>
                

                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-info">Create</button>
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

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
            <h1 class="text-center">Edit Application</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('applications.updateApplication', $Info->application_id) }}">
                @csrf
                <!-- Application ID -->
                <div class="form-group">
                    <label for="application_id">Application ID</label>
                    <input type="text" readonly class="form-control" id="application_id" name="application_id" value="{{ $Info->application_id }}" required>
                </div>

                <!-- Application Title -->
                <div class="form-group">
                    <label for="application_title">Application Title</label>
                    <input type="text" class="form-control" id="application_title" name="application_title" value="{{ $Info->application_title }}" required>
                </div>

                <!-- Application Type (Combo Box) Version 1.0 of handling combo data -->
                <div class="form-group">
                    <label for="application_type">Application Type</label>
                    <select class="form-control" id="application_type" name="application_type" required>
                        <option value="">Select Application Type</option>
                        <option value="General application" {{ $Info->application_type === "General application" ? "selected" : "" }}>General Application</option>
                        <option value="Seminar" {{ $Info->application_type === "Seminar" ? "selected" : "" }}>Seminar</option>
                        <option value="Festival" {{ $Info->application_type === "Festival" ? "selected" : "" }}>Festival</option>
                        <option value="Exhibitions" {{ $Info->application_type === "Exhibitions" ? "selected" : "" }}>Exhibitions</option>
                        <option value="Workshop" {{ $Info->application_type === "Workshop" ? "selected" : "" }}>Workshop</option>
                        <option value="Sports" {{ $Info->application_type === "Sports" ? "selected" : "" }}>Sports</option>
                        <option value="Competition" {{ $Info->application_type === "Competition" ? "selected" : "" }}>Competition</option>
                        <option value="Charity" {{ $Info->application_type === "Charity" ? "selected" : "" }}>Charity</option>
                        <option value="Show" {{ $Info->application_type === "Show" ? "selected" : "" }}>Show</option>
                        <option value="Party" {{ $Info->application_type === "Party" ? "selected" : "" }}>Party</option>
                        <option value="Cultural" {{ $Info->application_type === "Cultural" ? "selected" : "" }}>Cultural</option>
                        <option value="Others" {{ $Info->application_type === "Others" ? "selected" : "" }}>Others</option>
                    </select>
                </div>
                <!-- Application Date -->
                <div class="form-group">
                    <label for="application_date">Application Date</label>
                    <input type="date" class="form-control" id="application_date" name="application_date" value="{{ $Info->application_date }}" required>
                </div>

                <!-- Application Description -->
                <div class="form-group">
                    <label for="application_description">Application Description</label>
                    <textarea class="form-control" id="application_description" name="application_description" rows="5" placeholder="">{{ $Info->application_description }}</textarea>
                </div>

                <!-- Applicant Name -->
                <div class="form-group">
                    <label for="applicant_name">Applicant Name</label>
                    <input type="text" class="form-control" id="applicant_name" name="applicant_name" value="{{ $Info->applicant_name }}" required>
                </div>

                <!-- Club applicant of application (Combo Box) Version 2.0 of handling combo data -->

                @if(Auth::user()->user_type === 'super admin')
                <div class="form-group">
                    <label for="club_name">Club Name</label>
                    <select class="form-control" id="club_name" name="club_name" required>
                        <option value="">Select Club</option>
                        @foreach ($clubListInfo as $row)
                            <option value="{{ $row->club_name }}" {{ $Info->club_name == $row->club_name ? 'selected' : '' }}>
                                {{ $row->club_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                @elseif (Auth::user()->user_type === 'club admin')
                <div class="form-group">
                    <input type="text" class="form-control" id="club_name" name="club_name" value = "{{Auth::user()->user_name}}" readonly>
                </div>
                @endif

                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary bg-info">Edit Data</button>
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

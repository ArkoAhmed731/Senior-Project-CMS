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
    <link rel="stylesheet" href="{{ asset('css/createPost.css') }}">
    <link rel="stylesheet" href="{{ asset('css/manageUsers.css') }}">

</head>
<body>
    <div class="site-wrap">
        {{-- Nav Bar --}}
        @include('menu.navBar')
        {{-- <div class = "he ml-3 mr-3">{{Auth::user()->user_name}}</div> --}}

        <div class="p-5 w-50 mx-auto mt-5 mb-5 shadow-lg bg-white rounded-lg">
            <h1 class="text-center">Create Application</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('applications.store') }}" enctype="multipart/form-data">
                @csrf
                <!-- Application Title -->
                <div class="form-group">
                    <input type="text" class="form-control" id="application_title" name="application_title" placeholder="Application Title" required>
                </div>
                <!-- Application Type (Combo Box) -->
                <div class="form-group">
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

                @if (Auth::user()->user_type === 'club admin')
                <div class="form-group">
                    <input type="text" class="form-control" id="club_name" name="club_name" value = "{{Auth::user()->user_name}}" readonly>
                </div>
                @elseif(Auth::user()->user_type === 'super admin')
                <div class="form-group">
                    <select class="form-control" id="club_name" name="club_name" required>
                        <option value="">Select Club</option>
                        @foreach ($Info as $row)
                            <option value="{{ $row->club_name }}">{{ $row->club_name }}</option>
                        @endforeach
                    </select>
                </div>
                @endif

                <!-- Department Selection -->
                <div class="form-group shadow p-3 m-5 bg-white rounded">
                    <h3 class="text-center">Select Departments</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="checkbox" id="onm" name="departments[]" value="ONM">
                            <label for="onm">ONM</label><br>
                            <input type="checkbox" id="cits" name="departments[]" value="CITS">
                            <label for="cits">CITS</label><br>
                            <input type="checkbox" id="facilities" name="departments[]" value="Facilities">
                            <label for="facilities">Facilities</label><br>
                            <input type="checkbox" id="security" name="departments[]" value="Security">
                            <label for="security">Security</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" id="finance" name="departments[]" value="Finance">
                            <label for="finance">Finance</label><br>
                            <input type="checkbox" id="administration" name="departments[]" value="Administration">
                            <label for="administration">Administration</label><br>
                            <input type="checkbox" id="councilaffairs" name="departments[]" value="Council Affairs">
                            <label for="councilaffairs">Council Affairs</label><br>
                            <input type="checkbox" id="mpr" name="departments[]" value="MPR">
                            <label for="mpr">MPR</label><br>
                        </div>
                    </div>
                </div>

                <!-- <div id="file-upload-form" class="uploader">
                    <input id="file-upload" type="file" name="fileUpload" accept=".pdf" />

                    <label for="file-upload" id="file-drag">
                        <img id="file-image" src="#" alt="Preview" class="hidden">
                        <div id="start">
                            <i class="fa fa-download" aria-hidden="true"></i>
                            <div>Select a PDF file or drag here</div>
                            <div id="notimage" class="hidden">Please select a PDF file</div>
                            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                        </div>
                        <div id="response" class="hidden">
                            <div id="messages"></div>
                        </div>
                    </label>
                </div> -->
                
                <!-- Add more department checkboxes as needed -->
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
    <script src="../../js/application_pdf_upload.js"></script>
</body>
</html>

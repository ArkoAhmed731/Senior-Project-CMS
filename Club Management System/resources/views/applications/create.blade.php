<!DOCTYPE html>
<html>
<head>
    <title>Create Application</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h1>Create Application</h1>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
    
    
        <form method="POST" action="{{ route('applications.store') }}">
            @csrf
    
            <!-- Application Title -->
            <div class="form-group">
                <label for="application_title">Application Title</label>
                <input type="text" class="form-control" id="application_title" name="application_title" required>
            </div>
    
            <!-- Application Type -->
            <div class="form-group">
                <label for="application_type">Application Type</label>
                <input type="text" class="form-control" id="application_type" name="application_type" required>
            </div>
    
            <!-- Application Date -->
            <div class="form-group">
                <label for="application_date">Application Date</label>
                <input type="date" class="form-control" id="application_date" name="application_date" required>
            </div>
    
            <!-- Application Description -->
            <div class="form-group">
                <label for="application_description">Application Description</label>
                <textarea class="form-control" id="application_description" name="application_description" required></textarea>
            </div>
    
            <!-- Applicant Name -->
            <div class="form-group">
                <label for="applicant_name">Applicant Name</label>
                <input type="text" class="form-control" id="applicant_name" name="applicant_name" required>
            </div>
    
            <!-- Department Selection -->
            <div class="form-group">
                <label for="departments">Select Departments</label><br>
                <input type="checkbox" id="onm" name="departments[]" value="ONM">
                <label for="onm">ONM</label><br>
                <input type="checkbox" id="cits" name="departments[]" value="CITS">
                <label for="cits">CITS</label><br>
                <!-- Add more department checkboxes as needed -->
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>



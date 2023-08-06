<!DOCTYPE html>
<html>
<head>
    <title>Create Application</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Application</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('applications.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="application_title">Title</label>
                            <input type="text" class="form-control" id="application_title" name="application_title" required>
                        </div>

                        <div class="form-group">
                            <label for="application_type">Type</label>
                            <input type="text" class="form-control" id="application_type" name="application_type" required>
                        </div>

                        <div class="form-group">
                            <label for="application_date">Date</label>
                            <input type="date" class="form-control" id="application_date" name="application_date" required>
                        </div>

                        <div class="form-group">
                            <label for="application_description">Description</label>
                            <textarea class="form-control" id="application_description" name="application_description" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="applicant_name">Applicant Name</label>
                            <input type="text" class="form-control" id="applicant_name" name="applicant_name" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>





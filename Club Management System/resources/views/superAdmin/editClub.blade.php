<!-- create_new_club.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Create a new club</title>
    <!-- Add Bootstrap CSS and JavaScript -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/manageUsers.css') }}">
</head>

<body>


    <div class="site-wrap">

        {{-- nav bar --}}

        @include('menu.navBar')
        {{-- nav bar end --}}
        <h1 class = "he">Edit Club</h1>


        <div class="container w-50 vh-100">



            <form method="post" action="{{ route('superAdmin.updateClub', $Info->club_id) }}">
                @csrf
                <div class="form-group text-center">
                    {{-- <label for="">Logo</label>
                    <input type="number" name="logo" id="logo" class="form-control"
                        placeholder="" value="{{ $Info->club_id }}" required> --}}
                    <label for="">Club ID</label>
                    <input type="number" name="club_id" id="club_id" class="form-control"
                        placeholder="" value="{{ $Info->club_id }}" required>
                    <br>
                    <label for="">Club Name</label>
                    <input type="text" name="club_name" id="club_name" class="form-control"
                        placeholder="" value="{{ $Info->club_name }}" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info">Save Information</button>
                </div>
            </form>

            <!-- Display alerts below the button -->
            @if (session('message'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>


    </div>


    {{-- admin end --}}

    {{-- footer --}}
    @include('menu.footer')


</body>

</html>

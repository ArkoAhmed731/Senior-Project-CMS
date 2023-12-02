<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/manageUsers.css') }}">


    <title>Add new user</title>
</head>

<body>

    <div class="site-wrap">

        {{-- nav bar --}}

        @include('menu.navBar')
        {{-- nav bar end --}}

        <div class = "he">Active Clubs</div>


        <div class="container-fluid">

            @if (Session::get('success'))
                <div class = "alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::get('fail'))
                <div class = "alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <br>

            @csrf
            <div class="table-responsive">

                <table class="table table-hover ">
                    <thread>
                        <th>Club ID</th>
                        <th>Club Name</th>
                        <th>Action</th>

                    </thread>
                    <tbody>

                        @foreach ($list as $club)
                            <tr>
                                <td>{{ $club->club_id }}</td>
                                <td>{{ $club->club_name }}</td>
                                <td>
                                    <div class = "btn-group">
                                        <a href="{{ route('superAdmin.editClub', $club->club_id) }}"
                                            class="btn btn-primary btn-xs">Edit</a>

                                        <a href="{{ route('superAdmin.deleteClub', $club->club_id) }}"
                                            class="btn btn-danger btn-xs">Delete</a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>

            <div class="text-center">
          
                <a class="btn btn-info p-3 " href="/superAdmin/add-club" role="button">Add Club</a>

            </div>


        </div>
    </div>
    @include('menu.footer')


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/manageUsers.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <title>Chess Club new user</title>
</head>

<body>
    <div class="site-wrap">

        {{-- nav bar --}}

        @include('menu.navBar')
        {{-- nav bar end --}}

        <div class = "he ml-3 mr-3">Club Name</div>
        <h3 class="text-center"> Manage Members</h3>


        {{-- <div class="container-fluid"> --}}

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
            <div class="table-responsive pl-5 pr-5">

                <table class="table table-hover ">
                    <thread>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Gender</th>
                        <th>Position</th>
                        <th>Action</th>

                    </thread>
                    <tbody>

                        @foreach ($list as $members)
                            <tr>
                                <td>{{ $members->user_id }}</td>
                                <td>{{ $members->user_name }}</td>
                                <td>{{ $members->contact_number }}</td>
                                <td>{{ $members->gender }}</td>
                                <td>{{ $members->club_position }}</td>
                                <td>
                                    <div class = "btn-group">
                                        <!-- <a href="" class="btn btn-primary btn-xs">Edit</a> -->
                                        <!-- <a href="delete/{{ $members->user_id }}" class="btn btn-danger btn-xs">Delete</a> -->

                                        <a href="{{ route('club.editMember', $members->user_id) }}"
                                            class="btn btn-info btn-xs">Edit</a>
                                        <a href="{{ route('club.deleteMember', $members->user_id) }}"
                                            class="btn btn-danger btn-xs">Delete</a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-auto">
                    <a href="/myClubs/add-member">
                        {{-- <div class="card-body">
                            <h5 class="card-title">Add Member</h5><i class="bi bi-caret-right-fill"></i>
                        </div> --}}
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary bg-info mb-5">Add Member</button>
                      </div>
                    </a>
                </div>
            </div>

        {{-- </div> --}}

    </div>


    {{-- footer --}}
    @include('menu.footer')

    {{-- footer end     --}}

</body>

</html>

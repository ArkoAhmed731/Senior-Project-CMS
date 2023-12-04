<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/manageUsers.css') }}">

    <title>New User Request</title>
</head>

<body>

    <div class="site-wrap">

        {{-- nav bar --}}

        @include('menu.navBar')


        <div class = "he">New User Requests</div>


        <div class="container-fluid">

            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif

            <br>

            <div class="table-responsive">

                <table class="table table-hover ">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Gender</th>
                        <th>Actions</th>
                        </tread>
                    <tbody>

                        @foreach ($data['list'] as $user)
                            <tr>
                                <td>{{ $user->user_id }}</td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->user_email }}</td>
                                <td>{{ $user->contact_number }}</td>
                                <td>{{ $user->gender }}</td>

                                <td>
                                <div class = "btn-group">
                                    <a href="{{ route('acceptUserRequest', $user->user_id) }}" class="btn btn-info btn-xs" style="margin-left: 5px; border-radius: 10px">Set type and accept user</a>
                                    <a href="delete/{{ $user->user_id }}" class="btn btn-danger btn-xs" style="margin-left: 5px; border-radius: 10px">Reject & Delete</a>
                                </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>


            <div class="text-center">
          
              <a class="btn btn-info p-3 " href="/superAdmin/add-user" role="button">Add New User</a>

          </div>

        </div>
    </div>
    @include('menu.footer')

</body>

</html>

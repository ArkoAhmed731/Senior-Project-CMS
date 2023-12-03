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

        <h1 class = "he">All Current Users</h1>


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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Gender</th>
                        {{-- <th>Bio</th> --}}
                        <th>User Type</th>
                        <th>Actions</th>
                    </thread>
                    <tbody>

                        @foreach ($list as $user)
                            <tr>
                                <td>{{ $user->user_id }}</td>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->user_email }}</td>
                                <td>{{ $user->contact_number }}</td>
                                <td>{{ $user->gender }}</td>
                                {{-- <td>{{ $user->bio }}</td> --}}
                                <td>{{ $user->user_type }}</td>
                                <td>
                                    <div class = "btn-group">
                                        
                                        <a href="/superAdmin/edit-user/{{ $user->user_id }}"class="btn btn-info btn-xs" style="margin-left: 5px; border-radius: 10px">Edit</a>
                                        
                                        <a href="/delete-user/{{ $user->user_id }}" class="btn btn-danger btn-xs" style="margin-left: 5px; border-radius: 10px">Delete</a>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>


                </table>
            </div>

      
            <div class="text-center">
          
              <a class="btn btn-info p-3 " href="/superAdmin/add-user" role="button" style="margin-left: 5px; border-radius: 10px">Add New User</a>

          </div>

        </div>
    </div>
    @include('menu.footer')


</body>

</html>

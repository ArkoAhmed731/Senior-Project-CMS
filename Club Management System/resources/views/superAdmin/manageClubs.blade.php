<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/manageUsers.css">

    <title>Add new user</title>
</head>
<body>

<div class = "he">All Active Clubs</div>


<div class="container-fluid">

@if(Session::get('success'))
    <div class = "alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::get('fail'))
    <div class = "alert alert-danger">
        {{ Session::get('fail') }}
    </div>
@endif

<br>

@csrf
<div class="table-responsive">

<table class="table table-hover ">
  <thread>
    <th>club_id</th>
    <th>club_name</th>
  </thread>
  <tbody>

    @foreach ($list as $club)
    <tr>
      <td>{{ $club->club_id }}</td>
      <td>{{ $club->club_name }}</td>
      <td>
        <div class = "btn-group">
          <a href="{{ route('superAdmin.editClub', $club->club_id) }}" class="btn btn-primary btn-xs">Edit</a>
          
          <a href="{{ route('superAdmin.deleteClub', $club->club_id) }}" class="btn btn-danger btn-xs">Delete</a>
          
        </div>
      </td>
    </tr>
    @endforeach
    
  </tbody>
  

</table>
</div>

<div class="row justify-content-center">
        <div class="col-12 col-md-auto">
            <a href="/superAdmin/add-club" class="card text-white bg-info m-3 p-3 text-center">
                <div class="card-body">
                    <h5 class="card-title">Add Club</h5><i class="bi bi-caret-right-fill"></i>
                </div>
            </a>
        </div>
    </div>

</div>

</body>
</html>
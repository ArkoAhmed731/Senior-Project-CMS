<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/manageMembers.css">

    <title>Chess Club new user</title>
</head>
<body>

<div class = "he">Current Members</div>


<div class = "container">

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

<table class = "table table-hover">
  <thread>
    <th>user_id</th>
    <th>user_name</th>
    <th>contact_number</th>
    <th>gender</th>
    <th>club_position</th>
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
          <a href="" class="btn btn-primary btn-xs">Edit</a>
          <a href="delete/{{ $members->user_id }}" class="btn btn-danger btn-xs">Delete</a>
          
        </div>
      </td>
    </tr>
    @endforeach
    
  </tbody>
  

</table>

<a href="/myClubs/add-member" class="card text-white bg-info m-3 p-3" style="max-width: auto;">
    <div class="card-body d-flex justify-content-between">
      <h5 class="card-title">Add Member</h5><i class="bi bi-caret-right-fill"></i>
    </div>
</a>

</div>

</body>
</html>
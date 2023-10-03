<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/index.css">

    <title></title>
</head>
<body>

<div class = "he">Add new user</div>


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



<form action="add" method="post"> 

@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">IUB ID</label>
    <input name = "user_id" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name = "user_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input name = "user_email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Contact Number</label>
    <input name = "contact_number" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select name = "gender" class="form-control" id="exampleFormControlSelect1">
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Club Postion</label>
    <select name = "club_position" class="form-control" id="exampleFormControlSelect1">
      <option>Normal</option>
      <option>Vice-President</option>
      <option>Treasurer</option>
      <option>President</option>
    </select>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button name = "submit" type="submit" class="btn btn-primary">Add User</button>
    </div>
  </div>

</form>

<br>

<table class = "table table-hover">
  <thread>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Gender</th>
    <th>Position</th>
    <th>Actions</th>
  </thread>
  <tbody>

    @foreach ($list as $item)
    <tr>
      <td>{{ $item->user_id }}</td>
      <td>{{ $item->user_name }}</td>
      <td>{{ $item->user_email }}</td>
      <td>{{ $item->contact_number }}</td>
      <td>{{ $item->gender }}</td>
      <td>{{ $item->club_position }}</td>
      <td>
        <div class = "btn-group">
          <a href="edit/{{ $item->user_id }}" class="btn btn-primary btn-xs">Edit</a>
          <a href="delete/{{ $item->user_id }}" class="btn btn-danger btn-xs">Delete</a>
        </div>
      </td>
    </tr>
    @endforeach
    
  </tbody>
  

</table>

</div>
</body>
</html>
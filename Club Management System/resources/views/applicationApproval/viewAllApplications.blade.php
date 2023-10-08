<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/viewAllApplications.css">

    <title>View Applications</title>
</head>
<body>

<div class="site-wrap">

@include('menu.navBar')

  <div class = "he">Submitted Applications</div>


  <div class = "container-fluid">

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

    <div class="table-responsive">
    <table class = "table table-hover">
      <thread>
        <th>application_id</th>
        <th>application_title</th>
        <th>application_type</th>
        <th>application_date</th>
        <th>application_description</th>
        <th>applicant_name</th>
        <th>club_name</th>
        <th>Actions</th>
      </thread>
      <tbody>

        @foreach ($applications as $item)
        <tr>
          <td>{{ $item->application_id }}</td>
          <td>{{ $item->application_title }}</td>
          <td>{{ $item->application_type }}</td>
          <td>{{ $item->application_date }}</td>
          <td>{{ $item->application_description }}</td>
          <td>{{ $item->applicant_name }}</td>
          <td>{{ $item->club_name }}</td>
          <td>
            <div class = "btn-group">
              @if(Auth::user()->user_type === 'offcial')
                <a href="post-approval/{{ $item->application_id }}" class="btn btn-primary btn-xs">Respond</a>
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs">View Progress</a>
              @elseif(Auth::user()->user_type === 'club admin')
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs">View Progress</a>
                <a href="/applications/edit-application/{$item->application_id}" class="btn btn-info btn-xs">Edit</a>
                <a href="delete/{{ $item->application_id }}" class="btn btn-danger btn-xs">Delete</a>
              @elseif(Auth::user()->user_type === 'super admin')
                <a href="post-approval/{{ $item->application_id }}" class="btn btn-primary btn-xs">Respond</a>
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs">View Progress</a>
                <a href="/applications/edit-application/{$item->application_id}" class="btn btn-info btn-xs">Edit</a>
                <a href="delete/{{ $item->application_id }}" class="btn btn-danger btn-xs">Delete</a>
              @endif
              
            </div>
          </td>
        </tr>
        @endforeach
        
      </tbody>
      

    </table>
    </div>

  </div>
</div>

@include('menu.footer')

</body>
</html>
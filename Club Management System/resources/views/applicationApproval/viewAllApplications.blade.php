{{-- <!DOCTYPE html>
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
        <th>Application ID</th>
        <th>Application Title</th>
        <th>Application Type</th>
        <th>Application Date</th>
        <th>Application Description</th>
        <th>Applicant Name</th>
        <th>Club Name</th>
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
              @if(Auth::user()->user_type === 'official')
                <a href="post-approval/{{ $item->application_id }}" class="btn btn-primary btn-xs rounded">Respond</a>
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs rounded" style="margin-left: 5px;">View Progress</a>
              @elseif(Auth::user()->user_type === 'club admin')
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs rounded">View Progress</a>
                <a href="/applications/edit-application/{$item->application_id}" class="btn btn-info btn-xs rounded" style="margin-left: 5px;">Edit</a>
                <a href="delete/{{ $item->application_id }}" class="btn btn-danger btn-xs rounded" style="margin-left: 5px;">Delete</a>
              @elseif(Auth::user()->user_type === 'super admin')
                <a href="post-approval/{{ $item->application_id }}" class="btn btn-primary btn-xs rounded">Respond</a>
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs rounded" style="margin-left: 5px;">View Progress</a>
                <a href="/applications/edit-application/{$item->application_id}" class="btn btn-info btn-xs rounded" style="margin-left: 5px;">Edit</a>
                <a href="delete/{{ $item->application_id }}" class="btn btn-danger btn-xs rounded" style="margin-left: 5px;">Delete</a>
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
</html> --}}







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

        <div class = "he ml-3 mr-3">Submitted Applications</div>

        {{-- <div class="container-fluid"> --}}

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
            <div class="table-responsive pl-5 pr-5">

              <table class = "table table-hover">
                <thread>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Application Type</th>
                  <th>Date</th>
                  <th>Applicant</th>
                  <th>Club Name</th>
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
              @if(Auth::user()->user_type === 'official')
                <a href="post-approval/{{ $item->application_id }}" class="btn btn-info btn-xs rounded">Respond</a>
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs rounded" style="margin-left: 5px;">View Progress</a>
              @elseif(Auth::user()->user_type === 'club admin')
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs rounded">View Progress</a>
                <a href="/applications/edit-application/{$item->application_id}" class="btn btn-info btn-xs rounded" style="margin-left: 5px;">Edit</a>
                <a href="delete/{{ $item->application_id }}" class="btn btn-danger btn-xs rounded" style="margin-left: 5px;">Delete</a>
              @elseif(Auth::user()->user_type === 'super admin')
                <a href="post-approval/{{ $item->application_id }}" class="btn btn-primary btn-xs rounded">Respond</a>
                <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs rounded" style="margin-left: 5px;">View Progress</a>
                <a href="/applications/edit-application/{$item->application_id}" class="btn btn-info btn-xs rounded" style="margin-left: 5px;">Edit</a>
                <a href="delete/{{ $item->application_id }}" class="btn btn-danger btn-xs rounded" style="margin-left: 5px;">Delete</a>
              @endif
              
            </div>
          </td>
        </tr>
        @endforeach
                  
                </tbody>
                
          
              </table>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-auto">
                    <a href="/applications/create">
                        {{-- <div class="card-body">
                            <h5 class="card-title">Add Member</h5><i class="bi bi-caret-right-fill"></i>
                        </div> --}}
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary bg-info mb-5">Create Application</button>
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

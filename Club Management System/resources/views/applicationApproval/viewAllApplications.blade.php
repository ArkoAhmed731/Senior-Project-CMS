


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


    <title>Submitted Applications</title>
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
                  <th>Type</th>
                  <th>Date</th>
                  <th>Applicant</th>
                  <th>Club</th>
                  <th>Actions</th>
                </thread>
                <tbody>
          
                  @foreach ($applications as $item)
                  <tr>
                    <td>{{ $item->application_id }}</td>
                    <td>{{ $item->application_title }}</td>
                    <td>{{ $item->application_type }}</td>
                    <td>{{ $item->application_date }}</td>
                    <td>{{ $item->applicant_name }}</td>
                    <td>{{ $item->club_name }}</td>
                    <td>
                      <div class = "btn-group">
                        @if(Auth::user()->user_type === 'official')
                          <a href="post-approval/{{ $item->application_id }}" class="btn btn-info btn-xs rounded">Respond</a>
                          <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs rounded" style="margin-left: 5px; border-radius: 10px">View Progress</a>
                        @elseif(Auth::user()->user_type === 'club admin')
                          <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs rounded " style="margin-left: 5px; border-radius: 10px">View Progress</a>
                          <a href="/applications/edit-application/{$item->application_id}" class="btn btn-info btn-xs rounded" style="margin-left: 5px; border-radius: 10px">Edit</a>
                          <a href="delete/{{ $item->application_id }}" class="btn btn-danger btn-xs rounded" style="margin-left: 5px; border-radius: 10px">Delete</a>

                        @elseif(Auth::user()->user_type === 'super admin')
                          @if($item)
                              <a href="post-approval/{{ $item->application_id }}" class="btn btn-primary btn-xs" style="margin-left: 5px; border-radius: 10px">Respond</a>
                              <a href="application-approval-progress/{{ $item->application_id }}" class="btn btn-secondary btn-xs" style="margin-left: 5px; border-radius: 10px">View Progress</a>
                              <a href="/applications/edit-application/{{$item->application_id}}" class="btn btn-info btn-xs" style="margin-left: 5px; border-radius: 10px">Edit</a>
                              <a href="applications/delete/{{ $item->application_id }}" class="btn btn-danger btn-xs" style="margin-left: 5px; border-radius: 10px">Delete</a>
                          @else
                              <!-- Handle the case when $item is null (optional) -->
                              <span class="text-danger">Item not found for application_id: {{ $item->application_id }}</span>
                          @endif
                        @endif

                        

                        
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
                
          
              </table>
            </div>

    </div>


    {{-- footer --}}
    @include('menu.footer')

    {{-- footer end     --}}

</body>

</html>

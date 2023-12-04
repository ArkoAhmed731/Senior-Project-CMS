<!--  -->
<!-- approve or decline an application by individual departments -->
<!--  -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMS</title>
    <link rel="stylesheet" href="{{ asset('../../css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/postApproval.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/bootstrap.min.css') }}">
    

    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>

<div class="site-wrap">

  {{-- nav bar --}}
  @include('menu.navBar')
  
  {{-- nav bar end--}}

  <div class="m-5 p-2 w-100 mx-auto">


<div class="application bg-white shadow-lg h-75">


  <form action="{{ route('approve_update') }}" method="post"> 

  @csrf
  <div class="d-none">
    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>Application ID</strong></label>
      <input name = "application_id" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_id }}" >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>Application Title</strong></label>
      <input name = "name" type="text"  readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_title }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>Application Type</strong></label>
      <input name = "email" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_type }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>Application Date</strong></label>
      <input name = "contact" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_date }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>Application Description</strong></label>
      <input name = "contact" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_description }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1"><strong>Applicant Name</strong></label>
      <span class="form-control-plaintext" id="exampleFormControlInput1">{{ $Info->applicant_name }}</span>
    </div>

  </div>
    <h2>Title: {{ $Info->application_title }}</h2>

    <div class="form-group">
      <p><b>Club: {{ $Info->club_name }}</b></p>
    </div>
    <p><strong>Description:</strong></p>
    <p>{{ $Info->application_description }}</p>
   



    <div class="form-group">
      {{-- <label for="exampleFormControlInput1"><strong>Reason for your approval/disapproval</strong></label> --}}
      <input name = "response" type="text" class="form-control-plaintext border border-info rounded" id="exampleFormControlInput1" placeholder=" Remarks" value="">
    </div>
    


    {{-- <div class="form-group row"> --}}
      {{-- <div class="col-sm-10"> --}}
        <button name = "approve_button" type="submit" class="btn btn-primary bg-info mr-2">&#10003; Approve</button>
      {{-- </div>    
    </div> --}}
    {{-- <div class="form-group row">
      <div class="col-sm-10"> --}}
        <button name = "decline_button" type="submit" class="btn btn-secondary bg-danger">&#10007; Decline</button>
      {{-- </div>
    </div> --}}
    <div class="form-group row">
      <div class="col-sm-10">
        <a href="/applications/view-application-file/{{ $Info->application_id }}" class="btn btn mt-2">View Application</a>
        <!-- <button name = "/applications/view_application/{{ $Info->application_id }}" type="submit" class="btn btn mt-2">View Application</button> -->
      </div>
    </div>
    
  </form>
</div>
</div>
</div>

<script src="script.js"></script>




{{-- footer --}}
     @include('menu.footer')
      {{-- footer end--}}

  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

    
</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/postApproval.css') }}">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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

  <h1>Application Approval Page</h1>


<div class="application">


  <form action="{{ route('approve_update') }}" method="post"> 

  @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Application ID</label>
      <input name = "application_id" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_id }}" >
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">application_title</label>
      <input name = "name" type="text"  readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_title }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">application_type</label>
      <input name = "email" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_type }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">application_date</label>
      <input name = "contact" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_date }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">application_description</label>
      <input name = "contact" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->application_description }}">
    </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">applicant_name</label>    
      <input name = "contact" type="text" readonly class="form-control-plaintext" id="exampleFormControlInput1" placeholder="" value="{{ $Info->applicant_name }}">
    </div>


    <div class="form-group row">
      <div class="col-sm-10">
        <button name = "approve_button" type="submit" class="btn btn-primary">Approve</button>
      </div>    
    </div>
    <br>
    <div class="form-group row">
      <div class="col-sm-10">
        <button name = "decline_button" type="submit" class="btn btn-secondary">Decline</button>
      </div>
    </div>
    
  </form>



<!-- <h2>Event Application</h2>
  <p><strong>Name:</strong> Abdus Salam</p>
  <p><strong>Email:</strong> absudsalam@example.com</p>
  <p><strong>Event:</strong> Concert for the rohingyas</p>
  <p><strong>Event Summary:</strong></p>
  <p></p>

  <div class="file">

    <button class="downloadFile"><a href="#" class="file-link">Download Application</a></button>
  </div>
  
  <div class="buttonsA">
    <button class="approve-btn">Approve</button>
    <button class="disapprove-btn">Decline</button>
  </div> -->
</div>

<!-- Additional application divs can be added here -->

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
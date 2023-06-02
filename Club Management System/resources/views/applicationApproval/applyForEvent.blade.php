<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/applyForEvent.css') }}">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('css/privateTest.css') }}"> -->
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


<div class="signup-container">
  
  <div class="right-container">
    <header>
      <h1>Write a clearly understandable application for best results </h1>
      <div class="set">
        <div class="pets-name">
          <label for="pets-name">Event Name</label>
          <input id="pets-name" placeholder="Your event's name" type="text"></input>
        </div>

        <!-- <div class="pets-photo">
          <button id="pets-upload">
            <i class="fas fa-camera-retro"></i>
          </button>
          <label for="pets-upload">Upload a photo</label>
        </div> -->
      </div>

      <div class="set">
        <div class="eventType">
          <label for="eventTypes">Event Type</label>
          <select id="eventTypes" name="eventTypes">
            <option value="Activation"></option>
            <option value="Cultural"></option>
          </select>
        </div>

        <div class="pets-birthday">
          <label for="pets-birthday">Event Date</label>
          <input id="pets-birthday" type="date"></input>
        </div>
      </div>

    <div class="drop-container">
        <label for="images" >
        <span class="drop-title">Drop files here</span>
        <br>
            or
        <input type="file" id="images" accept="image/*" required>
        </label>
    </div>
    </header>

    <footer>
      <div class="set">
        <button id="back">Back</button>
        <button id="next">Next</button>
      </div>
    </footer>
  </div>
</div>

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

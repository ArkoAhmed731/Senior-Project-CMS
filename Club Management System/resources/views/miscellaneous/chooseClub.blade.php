<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMS</title>
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

  <div class="right-container bg-light p-4">
    <h2 class="mx-auto">Select club</h2>
    <br>
    
    <!-- <form action="getClub" method = "get"> -->
      <select name="select_club" id="select_club">
        <option selected="true" disabled="disabled">Please Select</option>
        @foreach($club_names as $club_list)
          <option value="{{ $club_list->club_id }}"
          {{ $club_list->club_id }}>{{ $club_list->club_name}}
          </option>
        @endforeach
      </select>
      <script>
        var e = document.getElementById("select_club");
        var value = e.value;
        var text = e.options[e.selectedIndex].text;
      </script>
      <br><br>
      <div class = "btn-group">
        <a href="../crud/{{ $club_list->club_name }}" class="btn btn-primary btn-xs">GO</a>
        <!-- <button name = "submit" type="submit" class="btn btn-primary">Go</button> -->
      </div>
      <!-- </form> -->
    
  
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

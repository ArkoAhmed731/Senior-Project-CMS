<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/applyForEvent.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
<div class="signup-container">
  <div class="left-container">
    <h1>
      <i class="fas fa-paw"></i>
      IUB CMS
    </h1>
    <div class="puppy">
      <img src="images/applyForEventImage.jpg"/>
    </div>
  </div>
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
          <label for="eventType">Event Type</label>
          <select id="eventType" name="eventType">
            <option value="Activation"></option>
            <option value="Cultural"></option>
          </select>
        </div>

        <div class="pets-birthday">
          <label for="pets-birthday">Event Date</label>
          <input id="pets-birthday" placeholder="MM/DD/YYYY" type="text"></input>
        </div>
      </div>

    <div>
        <label for="images" class="drop-container">
        <span class="drop-title">Drop files here</span>
            or
        <input type="file" id="images" accept="image/*" required>
        </label>
    </div>

      <!-- <div class="set">
        <div class="pets-gender">
          <label for="pet-gender-female">Gender</label>
          <div class="radio-container">
            <input id="pet-gender-female" name="pet-gender" type="radio" value="female"></input>
            <label for="pet-gender-female">Female</label>
            <input id="pet-gender-male" name="pet-gender" type="radio" value="male"></input>
            <label for="pet-gender-male">Male</label>
          </div>
        </div>
        <div class="pets-spayed-neutered">
          <label for="pet-spayed">Spayed or Neutered</label>
          <div class="radio-container">
            <input id="pet-spayed" name="spayed-neutered" type="radio" value="spayed"></input>
            <label for="pet-spayed">Spayed</label>
            <input id="pet-neutered" name="spayed-neutered" type="radio" value="neutered"></input>
            <label for="pet-neutered">Neutered</label>
          </div>
        </div>
      </div>
      <div class="pets-weight">
        <label for="pet-weight-0-25">Weight</label>
        <div class="radio-container">
          <input id="pet-weight-0-25" name="pet-weight" type="radio" value="0-25"></input>
          <label for="pet-weight-0-25">0-25 lbs</label>
          <input id="pet-weight-25-50" name="pet-weight" type="radio" value="25-50"></input>
          <label for="pet-weight-25-50">25-50 lbs</label>
          <input id="pet-weight-50-100" name="pet-weight" type="radio" value="50-100"></input>
          <label for="pet-weight-50-100">50-100 lbs</label>
          <input id="pet-weight-100-plus" name="pet-weight" type="radio" value="100+"></input>
          <label for="pet-weight-100-plus">100+ lbs</label>
        </div>
      </div> -->

    </header>
    <footer>
      <div class="set">
        <button id="back">Back</button>
        <button id="next">Next</button>
      </div>
    </footer>
  </div>
</div>

    
</body>

</html>

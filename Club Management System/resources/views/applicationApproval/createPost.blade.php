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

        {{-- nav bar end --}}


        <div class="signup-container">

            <div class="right-container bg-light p-4">
                <h2 class="mx-auto">Create Post</h2>
                <div class="set">
                    <div class="eventName">
                        <input id="eventName" placeholder="Post title" type="text">

                    </div>



                </div>
                <input id="eventName" placeholder="Description" type="text" class="p-3 mb-3">

                <div class="set">
                    
                    <div class="eventType">

                        <label for="eventType">Post Type</label>
                        <select id="eventType" name="eventType">
                            <option value="Activation">Only for Club Members</option>
                            <option value="Activation">Recruitment</option>
                            <option value="Activation">Event</option>
                            <option value="Activation">Workshop</option>
                            <option value="Activation">Seminar</option>
                           
                        </select>
                    </div>

                    <div class="eventDate">
                        <label for="eventDate">Event Date</label>
                        <input id="eventDate" type="date"></input>
                    </div>
                </div>




                <div class="drop-container">
                    <label for="images">
                        <span class="drop-title">Drop Poster Here</span>
                        <br>
                        &emsp; &emsp; &emsp; or
                        <input type="file" id="images" accept="image/*" required>
                    </label>
                </div>


                <button id="next" class="submit-button mx-auto m-3">Submit</button>

            </div>
        </div>
    </div>




    {{-- footer --}}
    @include('menu.footer')
    {{-- footer end --}}



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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href="fonts/icomoon/style.css"> --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> --}}
    {{-- <link rel="stylesheet" href="css/magnific-popup.css"> --}}
    {{-- <link rel="stylesheet" href="css/jquery-ui.css"> --}}
    {{-- <link rel="stylesheet" href="css/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> --}}


    {{-- <link rel="stylesheet" href="css/aos.css"> --}}

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_myClubs.css">

</head>

<body>

    <div class="site-wrap">

        {{-- nav bar --}}
        @include('menu.navBar')
        {{-- nav bar end --}}


        {{-- cards --}}

        <div class="card w-100">
            <a href="#" class="card text-white bg-info m-3 p-3" style="max-width: 80%;">
                <div class=" card-header">Debate Club</div>
                <div class="card-body">
                    <h5 class="card-title">Club Meeting</h5>
                    <p class="card-text">Meeting will be held in 24th June 2 PM.</p>
                </div>
            </a>
        </div>
        <div class="card w-100">
            <a href="#" class="card text-white bg-info m-3 p-3" style="max-width: 80%;">
                <div class=" card-header">Music Club</div>
                <div class="card-body">
                    <h5 class="card-title">Audition</h5>
                    <p class="card-text">Auduition at the gallery from 10am to 3pm .</p>
                </div>
            </a>
        </div>
        <div class="card w-100">
            <a href="#" class="card text-white bg-info m-3 p-3" style="max-width: 80%;">
                <div class=" card-header">Jukti</div>
                <div class="card-body">
                    <h5 class="card-title">TechFest</h5>
                    <p class="card-text">TechFest on 24, 25 and 26th june</p>
                </div>
            </a>
        </div>






        {{-- cards end --}}
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

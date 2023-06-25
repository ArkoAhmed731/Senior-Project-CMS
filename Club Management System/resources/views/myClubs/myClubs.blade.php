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

                <div class="card-body">
                    <h5 class="card-title">Music Club</h5>
                    <div class="d-flex flex-row-reverse"><i class="bi bi-caret-right-fill"></i></div>
                    <p class="card-text">we need more good musicians</p>
                </div>
            </a>
        </div>
        <div class="card w-100">
            <a href="#" class="card text-white bg-info m-3 p-3" style="max-width: 80%;">

                <div class="card-body">
                    <h5 class="card-title">Photography club</h5>
                    <div class="d-flex flex-row-reverse"><i class="bi bi-caret-right-fill"></i></div>
                    <p class="card-text">Photowalk Coming soon</p>
                </div>
            </a>
        </div>
        <div class="card w-100">
            <a href="#" class="card text-white bg-info m-3 p-3" style="max-width: 80%;">

                <div class="card-body">
                    <h5 class="card-title">Debate Club</h5>
                    <div class="d-flex flex-row-reverse"><i class="bi bi-caret-right-fill"></i></div>
                    <p class="card-text">No new Updates</p>
                </div>
            </a>
        </div>
        <div class="card w-100">
            <a href="#" class="card text-white bg-info m-3 p-3" style="max-width: 80%;">

                <div class="card-body">
                    <h5 class="card-title">Cricket Club</h5>
                    <div class="d-flex flex-row-reverse"><i class="bi bi-caret-right-fill"></i></div>
                    <p class="card-text">Where do we practice?</p>
                </div>
            </a>
        </div>
        <div class="card w-100">
            <a href="#" class="card text-white bg-info m-3 p-3" style="max-width: 80%;">

                <div class="card-body">
                    <h5 class="card-title">Chess Club</h5>
                    <div class="d-flex flex-row-reverse"><i class="bi bi-caret-right-fill"></i></div>
                    <p class="card-text">Chess in nothing like war.</p>
                </div>
            </a>
        </div>


        {{-- cards end --}}

        {{-- footer --}}


    </div>
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

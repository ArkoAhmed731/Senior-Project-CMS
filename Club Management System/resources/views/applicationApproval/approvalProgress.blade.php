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
  <link rel="stylesheet" href="{{ asset('css/privateTest.css') }}">

</head>

<body>

  <div class="site-wrap">

  {{-- nav bar --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          
        </ul>
        
      </div>
    </nav>
  {{-- nav bar end--}}


  <div id = block>
        <h1>Approval Progress</h1>
        <progress value="0" max="100" style="--value: 0; --max: 100;"></progress>
        <div id = applicationDiv>
            Application ID: <var>applicationId</var>
            <br>
            Application Name: <var>applicationName</var>
            <br>
            <div>
                <button id="viewApplication" type="button" onclick="">View Application</button>
                <br>
             </div>
        </div>
        <br>      
    </div>

    <div id = progress>
    <div id = "Main departments">


    <div style="margin-left:10px">
        <div class="wrapper">
        <ul class="StepProgress">
            <div class="StepProgress-item is-done">
                <strong>DOSA <button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
            <div class="StepProgress-item is-done">
                <strong>Dean<button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
            <div class="StepProgress-item current">
                <strong>VC<button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
            <div class="StepProgress-item current">
                <strong>Department Head<button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
        </ul>
        </div>
    </div>


  
  {{-- footer --}}
    <footer class="site-footer bg-dark">
      <div class="container">
        <div class="d-flex justify-content-center">
          <div class="p-2"><a href="test.html">About</a></div>
          <div class="p-2"><a href="test.html">Privacy Policy</a></div>
          <div class="p-2"><a href="test.html">Contact Us</a></div>
        </div>
<hr>

        <div class="row text-center bg-gray">
          <div class="col-md-12">
            <p>
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | CMS
            </p>
          </div>

        </div>
      </div>
    </footer>
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

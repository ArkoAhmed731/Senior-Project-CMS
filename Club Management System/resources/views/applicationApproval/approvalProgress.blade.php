<!DOCTYPE html>
<html lang="en">

<head>
  <title>CMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<!-- progress bar -->
<link href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
        rel="stylesheet" />
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>
<!-- progress bar -->


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
  <link rel="stylesheet" href="css/privateTest.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  

</head>

<body>

  <div class="site-wrap">

  {{-- nav bar --}}
  @include('menu.navBar')
  
  {{-- nav bar end--}}


  <div id = block>
        <h2 class="text-center">Approval Progress</h2>

      

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

    <div class="progress progress-striped active mx-4 mb-4">
        <div class="progress-bar progress-bar-success"
          style="width: 0%"> 70%
        </div>
      </div>

      <script>
        $(".progress-bar").animate({
              width: "70%",
        }, 2500);
      </script>

    <!-- <div id = progress> -->
    <div id = "Main departments">

        <h4 class="text-center">Main Departments</h4>

      <div style="margin-left:10px">
      {{-- Main Departments --}}
        <div class="wrapper">
          
          <ul class="StepProgress ">
            <div class="StepProgress-item mb-2 is-done">
                <strong>DOSA<button id="approveDetailsBtn" type="button" onclick="">details</button></strong>
                <hr>
            </div>

            <div class="StepProgress-item mb-2 is-done">
                <strong>Dean<button id="approveDetailsBtn" type="button" onclick="">details</button></strong>
                <hr>

            </div>

            <div class="StepProgress-item mb-2 current">
                <strong>VC<button id="approveDetailsBtn" type="button" onclick="">details</button></strong>
                <hr>

            </div>

            <div class="StepProgress-item mb-2 current">
                <strong>Department Head<button id="approveDetailsBtn" type="button" onclick="">details</button></strong>
            </div>
          </ul>
        </div>
      </div>
    </div>


    <h4 class="text-center">Other Departments</h4>

      <div style="margin-left:10px">
        <div class="wrapper2">
        <ul class="StepProgress2">
            <div class="StepProgress-item is-done">
                <strong>ONM</strong></div>
            <div class="StepProgress-item is-done">
                <strong>Facilities</strong></div>
            <div class="StepProgress-item current">
                <strong>Security</strong></div>
            <div class="StepProgress-item current">
                <strong>MPR</strong></div>
            <div class="StepProgress-item current">
                <strong>MPR</strong></div>
                
        </ul>
        </div>
      </div>

  </div>

  @include('menu.footer')



  

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

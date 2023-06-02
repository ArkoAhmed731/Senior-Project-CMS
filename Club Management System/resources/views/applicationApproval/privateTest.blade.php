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
        <h1>Approval Progress</h1>

        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-success"
            style="width: 0%">
          </div>
        </div>

        <script>
          $(".progress-bar").animate({
                width: "70%",
          }, 2500);
        </script>

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

    <!-- <div id = progress> -->
    <div id = "Main departments">


      <div style="margin-left:10px">
        <div class="wrapper">
          <ul class="StepProgress">
            <div class="StepProgress-item is-done">
                <strong>DOSA<button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
            <div class="StepProgress-item is-done">
                <strong>Dean<button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
            <div class="StepProgress-item current">
                <strong>VC<button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
            <div class="StepProgress-item current">
                <strong>Department Head<button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
          </ul>
        </div>
      </div>
    </div>

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
        </ul>
        </div>
      </div>
    
  <div class="otherDepartments">
    <label for="pet-weight-0-25">Other Departments</label>
    <br>
    <div class="checkbox-container">
      <input id="pet-weight-0-25" name="pet-weight" type="checkbox" value="0-25"></input>
      <label for="pet-weight-0-25">0-25 lbs</label>
      <input id="pet-weight-25-50" name="pet-weight" type="checkbox" value="25-50"></input>
      <label for="pet-weight-25-50">25-50 lbs</label>
      <input id="pet-weight-50-100" name="pet-weight" type="checkbox" value="50-100"></input>
      <label for="pet-weight-50-100">50-100 lbs</label>
      <input id="pet-weight-100-plus" name="pet-weight" type="checkbox" value="100+"></input>
      <label for="pet-weight-100-plus">100+ lbs</label>
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

<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>
  <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
  <link rel="stylesheet" href="{{ asset('css/privateTest.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
=======
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

  

>>>>>>> 25f415f0d06570c895d91a1e9457ba394a6dade8
</head>

<body>

<<<<<<< HEAD
  <div id=block>
    <h1>Approval Progress</h1>
    <div id=applicationDiv>
      Application ID: <var>applicationId</var>
      <br>
      Application Name: <var>applicationName</var>
      <br>
      <div>
        <button id="viewApplication" type="button" onclick="">View Application</button>
        <br>
      </div>
=======
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
>>>>>>> 25f415f0d06570c895d91a1e9457ba394a6dade8
    </div>
    <br>
  </div>

<<<<<<< HEAD
  <div id=progress>
    <div id="Main departments">
=======
    <!-- <div id = progress> -->
    <div id = "Main departments">
>>>>>>> 25f415f0d06570c895d91a1e9457ba394a6dade8


      <div style="margin-left:10px">
        <div class="wrapper">
          <ul class="StepProgress">
            <div class="StepProgress-item is-done">
<<<<<<< HEAD
              <strong>DOSA <button id="approveDetailsBtn" type="button" onclick="">details</button></strong>
            </div>
=======
                <strong>DOSA<button id="approveDetailsBtn" type="button" onclick="">details</button></strong></div>
>>>>>>> 25f415f0d06570c895d91a1e9457ba394a6dade8
            <div class="StepProgress-item is-done">
              <strong>Dean<button id="approveDetailsBtn" type="button" onclick="">details</button></strong>
            </div>
            <div class="StepProgress-item current">
              <strong>VC<button id="approveDetailsBtn" type="button" onclick="">details</button></strong>
            </div>
            <div class="StepProgress-item current">
<<<<<<< HEAD
              <strong>Department Head<button id="approveDetailsBtn" type="button" onclick="">details</button></strong>
            </div>
          </ul>
        </div>
      </div>


      <!-- ``````````````````````````````````````````````````````````` -->
      <!-- HORIZoNTAL PROGRESS BAR HTML -->
      <!-- ``````````````````````````````````````````````````````````````` -->
      <section>
        <h2>DOSA</h2>

        <ol class="progress-bar">
          <li class="is-complete"><span>Received</span></li>
          <li class="is-active"><span>Reviewing</span></li>
          <li><span>Accepted</span></li>

        </ol>
      </section>

      <section>
        <h2>Dean</h2>

        <ol class="progress-bar">
          <li class="is-active"><span>Receiving</span></li>
          <li><span>Reviewing</span></li>
          <li><span>Accepted</span></li>

        </ol>
      </section>

      <!-- <section>
  <h2>Step 2</h2>

  <ol class="progress-bar">
    <li class="is-complete"><span>Objective &amp; Template</span></li>  
    <li class="is-active"><span>Options</span></li>  
    <li><span>Step</span></li>
    <li><span>In a Nutshell</span></li>  
    <li><span>Step</span></li>
    <li><span>Step</span></li>
    <li><span>Launch Date</span></li>  
    <li><span>Step</span></li>
    <li><span>Step</span></li>
    <li><span>Agreement</span></li>  
  </ol>
</section>

<section>
  <h2>Multiple Steps Complete</h2>

  <ol class="progress-bar">
    <li class="is-complete"><span>Objective &amp; Template</span></li>  
    <li class="is-complete"><span>Options</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>In a Nutshell</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Step</span></li>
    <li class="is-active"><span>Launch Date</span></li>  
    <li><span>Step</span></li>
    <li><span>Step</span></li>
    <li><span>Agreement</span></li>  
  </ol>
</section>

<section>
  <h2>Hover</h2>

  <ol class="progress-bar">
    <li class="is-complete"><span>Objective &amp; Template</span></li>  
    <li class="is-complete"><span>Options</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete is-hovered"><span>In a Nutshell</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Launch Date</span></li>  
    <li><span>Step</span></li>
    <li><span>Step</span></li>
    <li><span>Agreement</span></li>  
  </ol>
</section>

<section>
  <h2>Back From Visited Steps</h2>

  <ol class="progress-bar">
    <li class="is-complete"><span>Objective &amp; Template</span></li>  
    <li class="is-complete"><span>Options</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete is-active"><span>In a Nutshell</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Launch Date</span></li>  
    <li><span>Step</span></li>
    <li><span>Step</span></li>
    <li><span>Agreement</span></li>  
  </ol>
</section>

<section>
  <h2>Last Step</h2>

  <ol class="progress-bar">
    <li class="is-complete"><span>Objective &amp; Template</span></li>  
    <li class="is-complete"><span>Options</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>In a Nutshell</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Launch Date</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Step</span></li>
    <li class="is-active"><span>Agreement</span></li>  
  </ol>
</section>

<section>
  <h2>Progress Bar with Changes Indicator</h2>

  <ol class="progress-bar">
    <li class="is-complete"><span>Objective &amp; Template</span></li>  
    <li class="is-complete"><span>Options</span><span class="has-changes"></span></li>  
    <li class="is-complete"><span>Step</span><span class="has-changes"></span></li>
    <li class="is-complete"><span>In a Nutshell</span></li>  
    <li class="is-complete"><span>Step</span><span class="has-changes"></span></li>
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Launch Date</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Step</span></li>
    <li class="is-active"><span>Agreement</span></li>  
  </ol>
</section>

<section class="x-ray">
  <h2>X-RAY</h2>

  <ol class="progress-bar">
    <li class="is-complete"><span>Objective &amp; Template</span></li>  
    <li class="is-complete"><span>Options</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>In a Nutshell</span></li>  
    <li class="is-complete"><span>Step</span></li>
    <li class="is-complete"><span>Step</span></li>
    <li class="is-active"><span>Launch Date</span></li>  
    <li><span>Step</span></li>
    <li><span>Step</span></li>
    <li><span>Agreement</span></li>  
  </ol>
</section>

<section>
  <h2>Issues</h2>
  
  <ul>
    <li>Labels can lose centering when there are many options or the viewport is too narrow to accomodate the required width</li>
  </ul>
  
</section>
        </div>
    </div> -->


=======
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
>>>>>>> 25f415f0d06570c895d91a1e9457ba394a6dade8


  
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
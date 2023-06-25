<!DOCTYPE html>
<html lang="en">

<head>
  <title>CMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="jquery-1.9.1.min.js"></script>
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

  

</head>

<body>

<div class="site-wrap">

<header>
{{-- nav bar --}}
  @include('menu.navBar')
  
  {{-- nav bar end--}}
</header>

  <nav id="sidebar">
    <ul class="dots">
    <li>
      <a href="#">
        <span class="glyphicon glyphicon-user" data-launch-view="clubNotifications"><mark>23</mark></span>
      </a>  
    </li>
    
    <li>
      <a href="#">
      <span class="glyphicon glyphicon-envelope" data-launch-view="messageNotification"><mark class="big swing">7</mark></span>
      </a>  
    </li>
    <li>
      <a href="#">
      <span class="glyphicon glyphicon-time" data-launch-view="approvalProgressNotification"><mark class="rubberBand">99</mark></span>
      </a>
    </li>
    <li>
      <a href="#">
      <span class="glyphicon glyphicon-list-alt" data-launch-view="followedClubs"></span>
      </a>
    </li>    
    <!-- <li>
      <a href="#">
      <span class="glyphicon glyphicon-calendar"><mark class="green wobble">99+</mark></span>
      </a>
    </li>      
    <li>
      <a href="#">
      <span class="glyphicon glyphicon-random"><mark class="blue tada">13</mark></span>
      </a>
      </li>         -->
    </ul> 
  </nav>

<main>

  <div class="view" id = "testy">
  <h1>You have notifications! <br> Press an icon in the sidebar!</h1>

  </div>


  <div class="view hide" id = "clubNotifications">
    <h1>Club Notifications</h1>
    <div class=" p-3">

      <div class="m-2 card-section">
        <a href="#" class="card text-white bg-info m-auto w-90">
          <div class="card-body d-flex justify-content-between">
            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                <h3 class=text-center>12<h3>
                        <p class=text-center>Aug</p>
            </div>
            <div class="p-2" style="width: 60%">
                <h3 class="">Musical Flashmob</h3>
                <h6 class=" text-truncate">IUB Music Club</h6>

                <p class=" text-truncate">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>10:00AM-5:00PM</p>
            </div>
            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
          </div>
        </a>
      </div>
      <div class="m-2 card-section">
        <a href="#" class="card text-white bg-info m-auto w-90">
          <div class="card-body d-flex justify-content-between">
            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                <h3 class=text-center>5<h3>
                        <p class=text-center>Jan</p>
            </div>
            <div class="p-2" style="width: 60%">
                <h3 class="">Musical Flashmob</h3>
                <p class=" text-truncate">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>10:00AM-5:00PM</p>
            </div>
            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
          </div>
        </a>
      </div>

      <div class="m-2 card-section">
        <a href="#" class="card text-white bg-info m-auto w-90">
          <div class="card-body d-flex justify-content-between">
            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                <h3 class=text-center>26<h3>
                        <p class=text-center>Feb</p>
            </div>
            <div class="p-2" style="width: 60%">
                <h3 class="">Event Name</h3>
                <p class=" text-truncate">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>10:00AM-5:00PM</p>
            </div>
            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
          </div>
        </a>
      </div>




    </div>

  </div>

  <div class="view hide" id = "messageNotification">
    <h1>Message Notifications</h1>
    <div class=" p-3">

      <div class="m-2 card-section">
        <a href="#" class="card text-white bg-info m-auto w-90">
          <div class="card-body d-flex justify-content-between">
            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                <h3 class=text-center>12<h3>
                        <p class=text-center>Aug</p>
            </div>
            <div class="p-2" style="width: 60%">
                <h3 class="">DOSA</h3>
                <h6 class=" text-truncate">Event approval</h6>

                <p class=" text-truncate">We are requesting you change your requirement and apply again.</p>
                <!-- <p>10:00AM-5:00PM</p> -->
            </div>
            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
          </div>
        </a>
      </div>


    </div>

  </div>

  <div class="view hide" id = "approvalProgressNotification">
    <h1>Approval Progress Notifications</h1>
    <div class=" p-3">

      <div class="m-2 card-section">
        <a href="/approval-progress" class="card text-white bg-info m-auto w-90">
          <div class="card-body d-flex justify-content-between">
            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                <h3 class=text-center>12<h3>
                        <p class=text-center>Aug</p>
            </div>
            <div class="p-2" style="width: 60%">
                <h3 class="">Application for pahela baishakh concert</h3>
                <h6 class=" text-truncate">IUB Music Club</h6>

                <p class=" text-truncate">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>10:00AM-5:00PM</p>
            </div>
            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
          </div>
        </a>
      </div>
      <div class="m-2 card-section">
        <a href="#" class="card text-white bg-info m-auto w-90">
          <div class="card-body d-flex justify-content-between">
            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                <h3 class=text-center>5<h3>
                        <p class=text-center>Jan</p>
            </div>
            <div class="p-2" style="width: 60%">
                <h3 class="">Musical Flashmob</h3>
                <p class=" text-truncate">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>10:00AM-5:00PM</p>
            </div>
            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
          </div>
        </a>
      </div>





    </div>

  </div>


  <div class="view hide" id = "followedClubs">
    <h1>Followed Clubs</h1>
    <div class=" p-3">

      <!-- <div class="m-2 card-section">
        <a href="event-post" class="card text-white bg-info m-auto w-90">
          <div class="card-body d-flex justify-content-between">
            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                <h3 class=text-center>12<h3>
                        <p class=text-center>Aug</p>
            </div>
            <div class="p-2" style="width: 60%">
                <h3 class="">Application for pahela baishakh concert</h3>
                <h6 class=" text-truncate">IUB Music Club</h6>

                <p class=" text-truncate">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                    desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>10:00AM-5:00PM</p>
            </div>
            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
          </div>
        </a>
      </div> -->
      





    </div>

  </div>








</main>



<!-- <footer>
@include('menu.footer')
</footer> -->









<!-- `````````````````````
clickable sidebar to show differenet views
 -->

<!-- <script>
  $(document).ready(function (e) {

function showView(viewName) {
    $('.view').hide();
$('#' + viewName).show();
}

$('[data-launch-view]').click(function (e) {
    e.preventDefault();
    var viewName = $(this).attr('data-launch-view');
    showView(viewName);
});

});
</script> -->


<script>
 $(document).ready(function () {
  function showView(viewName) {
    $('.view').not('#' + viewName).hide();
    $('#' + viewName).fadeIn(300);
  }

  $('[data-launch-view]').click(function (e) {
    e.preventDefault();
    var viewName = $(this).attr('data-launch-view');
    showView(viewName);
  });
});
</script>







</body>

</html>
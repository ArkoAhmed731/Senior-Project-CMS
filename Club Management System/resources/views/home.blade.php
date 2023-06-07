

<!DOCTYPE html>
<html lang="en">

<head>
  <title>CMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">

  {{-- nav bar --}}

  @include('menu.navBar')
    {{-- nav bar end--}}


  {{-- carousel --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-30" src="images/demo-image.jpeg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-30" src="images/demo-image2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-30" src="images/demo-image3.png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

     {{-- carousel end --}}
    
    
{{-- cards --}}
  <div class=" card-section site-section d-flex align-content-center flex-wrap p-3">
        {{-- single card --}}
    <a href="#" class="card text-white bg-info m-2" style="width: 10rem; height:10rem">
            
           
              <i class="bi bi-calendar3 card-icon-size text-center mb-2"></i>   

              <h6 class="card-title text-center">Academic Calender</h6>
           
         

        </a>
 {{-- single card end--}}

 <a href="my-clubs" class="card text-white bg-info m-2" style="width: 10rem; height:10rem">
            
           
  <i class="bi bi-people-fill card-icon-size text-center mb-2"></i>   

  <h6 class="card-title text-center">My Clubs</h6>



</a>

<a href="/club-recruitment" class="card text-white bg-info m-2" style="width: 10rem; height:10rem">
            
           
  <i class="bi bi-ui-checks card-icon-size text-center mb-2"></i>   

  <h6 class="card-title text-center">Club Recruitment</h6>



</a>

<a href="/upcoming-events" class="card text-white bg-info m-2" style="width: 10rem; height:10rem">
            
           
  <i class="bi bi-calendar-event-fill card-icon-size text-center mb-2"></i>   

  <h6 class="card-title text-center">Upcoming Events</h6>



</a>

<a href="#" class="card text-white bg-info m-2" style="width: 10rem; height:10rem">
            
           
  <i class="bi bi-info-circle-fill card-icon-size text-center mb-2"></i>   

  <h6 class="card-title text-center">Extra</h6>



</a>

<a href="#" class="card text-white bg-info m-2" style="width: 10rem; height:10rem">
            
           
  <i class="bi bi-info-circle-fill card-icon-size text-center mb-2"></i>   

  <h6 class="card-title text-center">Extra</h6>



</a>

<a href="#" class="card text-white bg-info m-2" style="width: 10rem; height:10rem">
            
           
  <i class="bi bi-info-circle-fill card-icon-size text-center mb-2"></i>   

  <h6 class="card-title text-center">Extra</h6>



</a>

<a href="#" class="card text-white bg-info m-2" style="width: 10rem; height:10rem">
            
           
  <i class="bi bi-info-circle-fill card-icon-size text-center mb-2"></i>   

  <h6 class="card-title text-center">Extra</h6>



</a>

          
  </div>  
  
  {{-- cards end --}}

{{-- admin --}}
<div class="admin-panel">
  <h4 class="text-center">Admin Panel</h4>


  <a href="/apply-for-event" class="card text-white bg-info m-3 p-3" style="max-width: 100%;">
      <div class="card-body d-flex justify-content-between">
          <h5 class="card-title">Create Post</h5><i class="bi bi-caret-right-fill"></i>
      </div>
  </a>

  <a href="approval-progress" class="card text-white bg-info m-3 p-3" style="max-width: 100%;">
    <div class="card-body d-flex justify-content-between">
        <h5 class="card-title">Application Progress</h5><i class="bi bi-caret-right-fill"></i>
    </div>
</a>

<a href="#" class="card text-white bg-info m-3 p-3" style="max-width: 100%;">
  <div class="card-body d-flex d-flex justify-content-between">
      <h5 class="card-title">View Event Application</h5><i class="bi bi-caret-right-fill"></i>
  </div>
</a>
  
  
</div>

  {{-- admin end --}}
  
  {{-- footer --}}
  @include('menu.footer')

 {{-- footer end     --}}

  

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

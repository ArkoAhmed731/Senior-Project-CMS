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

   @include('menu.navBar')

    <div class=" rounded bg-secondary text-white p-4 m-3 w-75 mx-auto">

       <h3 class="text-center ">Event name</h3>
        <h5 class="text-center ">by Club Name</h5>

    </div>
    <div class=" mx-auto p-4 ">

        <h5 class=" "><b>Date: </b>5 Jan 2023</h5>

        <h5 class=" "><b>Time: </b>3:00PM-5:00PM</h5>

        <img src="images/eventImage/music-club-flash-mob.jpg" class=" rounded img-fluid mx-auto" alt="Responsive image">
        <p class=" mt-3"><b>Description: </b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            Why do we use it?
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
        </p>
 
    
    </div>

   


    </div>
    @include('menu.footer')



</body>
</html>
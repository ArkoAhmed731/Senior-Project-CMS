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
        {{-- nav bar end --}}

        <h4 class="text-center m-4">Edit Club Members</h4>
        <button type="button" class="btn btn-info mx-auto d-block">Add Member</button>


        <div class="table-responsive{-sm|-md|-lg|-xl}  p-5">

        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Contact number</th>
                  <th scope="col">Position</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>1820713</td>
                  <td>Azwad</td>
                  <td>azwad@gmail.com</td>
                  <td>01938123123</td>

                  <td>Member</td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>1830723</td>
                  <td>Rahat</td>
                  <td>rahat@gmail.com</td>
                  <td>0172123123</td>

                  <td>Vice President</td>

                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>2020713</td>
                  <td>Arko</td>
                  <td>arko@gmail.com</td>
                  <td>01548123123</td>

                  <td>President</td>

                </tr>
              </tbody>
          </table>
        </div>







    </div>

    <button type="button" class="btn btn-info mx-auto d-block m-3">Save</button>











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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CMS Login</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">

    {{-- 
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">


</head>

<body>

    <div class="wrapper">
        <div class="logo">
            <img src="images/iub-logo.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Club Management System(CMS)
        </div>


        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <input type="text" name="name" id="name" placeholder="Full Name">
            </div>
            <div class="form-field d-flex align-items-center">
                <input type="text" name="email" id="email" placeholder="Email address">
            </div>

            <div class="form-field d-flex align-items-center">
                <input type="text" name="userId" id="userId" placeholder="User ID">
            </div>

            <div class="form-field d-flex align-items-center">
                <input type="password" name="password" id="password" placeholder="Password">
            </div>


            <button class="btn mt-3">Sign up</button>
        </form>

        <div class="alert alert-success" role="alert">
            We'll send you an email when your account is ready to use
        </div>

        <div class="text-center fs-6">
            <a href="/login">Login instead</a>
        </div>


    </div>

    @include('menu.footer')



</body>

</html>

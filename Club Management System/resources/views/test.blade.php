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


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login2.css">


</head>



<body>

    <div class = "big-wrapper d-flex justify-content-center">
        <div class = "left">
            <h3>Welcome to CMS!</h3>
            <small class="text-muted">Digital Approval System that solves all your problems</small>
        </div>
        <div class= "wrapperer">
            <div class="wrapper ">
                <div class="logo">
                    <img src="images/iub-logo.jpg" alt="">
                </div>
                <div class="text-center mt-4 name">
                    Club Management System (CMS)
                </div>
                <form method="POST" action="{{ route('login') }}" class="p-3 mt-3">
                    @csrf
                    <div class="form-field d-flex align-items-center">
                        <i class="far fa-user"></i>
                        <input type="email" name="email" id="email" placeholder="Email address" class="form-control">
                    </div>
                    <div class="form-field d-flex align-items-center">
                        <i class="fas fa-key"></i>
                        <input type="password" name="password" id="pwd" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" class="btn mt-3">Login</button>
                </form>
                
                
                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="text-center fs-6">
                    <a href="{{ route('signup') }}">Sign up</a>
                </div>
                
            </div>
        </div>
        
    </div>

    

    @include('menu.footer')

</body>



</html>

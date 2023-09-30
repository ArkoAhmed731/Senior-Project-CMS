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
    
            <form class="p-3 mt-3" method="POST" action="{{ route('signup.store') }}">
                @csrf <!-- Add this line for CSRF protection -->
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="user_name" id="user_name" placeholder="Full Name">
                </div>
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="user_email" id="user_email" placeholder="Email address">
                </div>
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="user_id" id="user_id" placeholder="User ID">
                </div>
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="contact_number" id="contact_number" placeholder="Contact Number">
                </div>
                <div class="form-field gender">
                    <label for="gender">Gender:</label>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>
                
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                </div>
                
                <div class="form-field d-flex align-items-center">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn mt-3">Sign up</button>
            </form>
    
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Please fix the following errors:
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
    
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
    
            <div class="text-center fs-6">
                <a href="{{ route('login') }}">Login</a> 
            </div>
        </div>
    
        @include('menu.footer')
    



</body>

</html>

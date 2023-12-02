<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

    <div class="site-wrap">

        @include('menu.navBar')

        <div class=" rounded bg-secondary text-white p-4 m-3 w-75 mx-auto">

            <h3 class="text-center ">{{$contentType}}</h3>

        </div>


        <div class="p-3">
            <div class="m-2 card-section" style="overflow-x: auto; white-space: nowrap;">
                @foreach($content as $post)
                    <a href="{{ url('view-event/' . $post->post_id) }}" class="card text-white bg-info m-auto w-90">
                        <div class="card-body d-flex justify-content-between">
                            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                                <h3 class="text-center">{{ \Carbon\Carbon::parse($post->post_date)->format('d') }}</h3>
                                <p class="text-center">{{ \Carbon\Carbon::parse($post->post_date)->format('M') }}</p>
                            </div>
                            <div class="p-2" style="width: 60%">
                                <h3 class="event-name">{{ $post->post_title }}</h3>
                                <h6 class="text-truncate">{{ $post->club_name }}</h6>
                                <p class="text-truncate">{{ $post->post_description }}</p>
                                
                                {{-- <p>10-11am</p> --}}
                            </div>
                            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
                        </div>
                    </a>
                    <br>

                @endforeach
            </div>
        </div>


    </div>

    @include('menu.footer')



</body>

</html>

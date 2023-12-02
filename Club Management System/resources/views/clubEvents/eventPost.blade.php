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

    <div class="site-wrap">

        @include('menu.navBar')

        <div class=" rounded bg-secondary text-white p-4 m-3 w-75 mx-auto">

            <h3 class="text-center ">{{$post->post_title}}</h3>
            <h5 class="text-center ">by <br>{{$post->club_name}}</h5>

        </div>
        <div class=" mx-auto p-4 ">

            <h5 class=" "><b>Date: </b>{{$post->post_date}}</h5>
            <p class=" mt-3"><b>Description: </b>
                {{$post->post_description}}
                </p>

            {{-- <h5 class=" "><b>Time: </b>3:00PM-5:00PM</h5> --}}

            <!-- <img src="../../images/eventImage/music-club-flash-mob.jpg" class=" rounded img-fluid mx-auto" alt="Responsive image"> -->
            
            @php
                $imagePath = public_path('images/post_images/' . $post->post_id);
                $extensions = ['jpeg', 'png', 'jpg', 'gif'];
                $foundExtension = null;

                foreach ($extensions as $extension) {
                    if (file_exists($imagePath . '.' . $extension)) {
                        $foundExtension = $extension;
                        break;
                    }
                }
            @endphp
            
            <div class="mx-auto p-4 text-center">
            @if ($foundExtension)
                <img src="{{ asset('images/post_images/' . $post->post_id . '.' . $foundExtension) }}" class="rounded img-fluid mx-auto" alt="Responsive image" style="margin: 15px;">
            @else
                {{-- <p>No image available</p> --}}
            @endif
            </div>

           


        </div>




    </div>
    @include('menu.footer')



</body>

</html>

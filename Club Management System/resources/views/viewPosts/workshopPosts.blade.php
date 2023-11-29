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
            <h3 class="text-center">Workshop Posts</h3>
        </div>

        <div class="p-3">
            @foreach($workshopPosts as $workshopPost)
                <div class="m-2 card-section">
                    <a href="{{ route('posts.show', $workshopPost->id) }}" class="card text-white bg-info m-auto w-90">
                        <div class="card-body d-flex justify-content-between">
                            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                                <h3 class="text-center">{{ \Carbon\Carbon::parse($workshopPost->post_date)->format('d') }}</h3>
                                <p class="text-center">{{ \Carbon\Carbon::parse($workshopPost->post_date)->format('M') }}</p>
                            </div>
                            <div class="p-2" style="width: 60%">
                                <h3 class="">{{ $workshopPost->post_title }}</h3>
                                <h6 class="text-truncate">{{ $workshopPost->club_name }}</h6>
                                <p class="text-truncate">{{ $workshopPost->post_description }}</p>
                                <p>{{ $workshopPost->post_date }}</p>
                            </div>
                            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

    @include('menu.footer')

</body>

</html>

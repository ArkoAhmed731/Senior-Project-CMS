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

            <h3 class="text-center ">Upcoming Events</h3>

        </div>

        <!-- <div class=" p-3">

            <div class="m-2 card-section">
                <a href="event-post" class="card text-white bg-info m-auto w-90">
                    <div class="card-body d-flex justify-content-between">
                        <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                            <h3 class=text-center>12<h3>
                                    <p class=text-center>Aug</p>
                        </div>
                        <div class="p-2" style="width: 60%">
                            <h3 class="event-name">Musical Flashmob</h3>
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
                <a href="event-post" class="card text-white bg-info m-auto w-90">
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
                <a href="event-post" class="card text-white bg-info m-auto w-90">
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



            <div class="m-2 card-section">
                <a href="event-post" class="card text-white bg-info m-auto w-90">
                    <div class="card-body d-flex justify-content-between">
                        <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                            <h3 class=text-center>7<h3>
                                    <p class=text-center>Nov</p>
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




        </div> -->

        <div class="p-3">
            <div class="m-2 card-section" style="overflow-x: auto; white-space: nowrap;">
                @foreach($upcomingEvents as $post)
                    <a href="{{ url('/view-event/' . $post->post_id) }}" class="card text-white bg-info m-auto w-90">
                        <div class="card-body d-flex justify-content-between">
                            <div class="p-2 pt-5 border-right border-2" style="width: 30%">
                                <h3 class="text-center">{{ \Carbon\Carbon::parse($post->post_date)->format('d') }}</h3>
                                <p class="text-center">{{ \Carbon\Carbon::parse($post->post_date)->format('M') }}</p>
                            </div>
                            <div class="p-2" style="width: 60%">
                                <h3 class="event-name">{{ $post->post_title }}</h3>
                                <h6 class="text-truncate">{{ $post->club_name }}</h6>
                                <p class="text-truncate">{{ $post->post_description }}</p>
                                
                                <p>10-11am</p>
                            </div>
                            <div class="p-5" style="width: 10%"><i class="bi bi-caret-right-fill"></i></div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>


    </div>

    @include('menu.footer')



</body>

</html>

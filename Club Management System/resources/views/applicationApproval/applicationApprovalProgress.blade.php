<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- progress bar -->
    <link href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- progress bar -->


    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="fonts/icomoon/style.css"> --}}

    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> --}}
    {{-- <link rel="stylesheet" href="css/magnific-popup.css"> --}}
    {{-- <link rel="stylesheet" href="css/jquery-ui.css"> --}}
    {{-- <link rel="stylesheet" href="css/owl.carousel.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> --}}


    {{-- <link rel="stylesheet" href="css/aos.css"> --}}

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    {{-- <style>
        .message-box {
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px;
            display: none;
        }
    </style> --}}
    <style>
        .message-box {
            display: none;
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px;
        }

        .arrow-button,
        .hello-button {
            cursor: pointer;
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            padding: 5px 10px;
        }

        .show-message .message-box {
            display: block;
        }
    </style>




</head>

<body>

    <div class="site-wrap">

        {{-- nav bar --}}
        @include('menu.navBar')

        {{-- nav bar end --}}


        <div id=block class=" mx-auto mt-5 w-75 p-5 shadow-lg rounded-lg">
            <h2 class="text-center">Application Approval Progress</h2>
            <hr>

            <h3>Title: {{ $Info->application_title }}</h3>

            <p><strong>Application ID: {{ $Info->application_id }}</strong></p>
            <button id="viewApplication" type="button" onclick="" class="btn btn-primary bg-info text-center">View
                Application</button>


            <div class="progress m-4 ">
                <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar"
                    style="width: 50%" aria-valuenow="{{ $percentageOnes }}" aria-valuemin="0" aria-valuemax="100">
                    {{ $percentageOnes }}%</div>
            </div>


            <script>
                $(".progress-bar").animate({
                    width: "{{ $percentageOnes }}%",
                });
            </script>

            <!-- <div id = progress> -->
            <div id = "Main departments">

                <h4 class="text-center">Responses from Departments</h4>

                <div>
                    {{-- Main Departments --}}
                    <div class="wrapper">

                        <div id="DOSA">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-success">&#10003; DOSA</strong>
                                <button class="message-button btn btn-primary bg-info text-center"
                                    onclick="showMessage('message1')">Show Details</button>

                            </div>
                            <div id="message1" class="message-box">
                                This is the response of message 1
                            </div>
                            <hr>
                        </div>

                        <div id="Dean">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-success">&#10003; Dean</strong> <!-- Checkmark (Green) -->

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message2')">Show Details</button>

                            </div>
                            <div id="message2" class="message-box">
                                This is the response of message 2
                            </div>
                            <hr>
                        </div>


                        <div id="VC">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; VC</strong> <!-- Cross (Red) -->

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>


                        @if($Info->onm_status != 3)
                        <div id="onm">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; ONM</strong>

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>
                        @endif

                        @if($Info->cits_status != 3)
                        <div id="cits">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; CITS</strong>

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>
                        @endif

                        @if($Info->facilities_status != 3)
                        <div id="facilities">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; Facilities</strong>

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>
                        @endif

                        @if($Info->security_status != 3)
                        <div id="onm">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; Security</strong>

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>
                        @endif

                        @if($Info->finance_status != 3)
                        <div id="onm">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; Finance</strong>

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>
                        @endif

                        @if($Info->administration_status != 3)
                        <div id="onm">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; Administration</strong>

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>
                        @endif

                        @if($Info->councilaffairs_status != 3)
                        <div id="onm">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; Council Affairs</strong>

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>
                        @endif

                        @if($Info->mpr_status != 3)
                        <div id="onm">
                            <div class="m-2 d-flex justify-content-between">
                                <strong class="text-danger">&#10007; MPR</strong>

                                <button class="message-button  btn btn-primary bg-info text-center"
                                    onclick="showMessage('message3')">Show Details</button>

                            </div>
                            <div id="message3" class="message-box">
                                This is the response of message 3
                            </div>
                            <hr>
                        </div>
                        @endif



                        <div id="DepartmentHead" style="display: none;">
                        <div class="m-2 d-flex justify-content-between">
                            <strong class="text-danger">&#10007; Department Head</strong> <!-- Cross (Red) -->
                            <button class="message-button  btn btn-primary bg-info text-center"
                                onclick="showMessage('message4')">Show Details</button>
                        </div>
                        <div id="message4" class="message-box">
                            This is the response of message 4
                        </div>
                        <hr>
                        </div>


                    </div>
                </div>
            </div>


        </div>

    </div>
    @include('menu.footer')



    <script>
        function showMessage(messageId) {
            var messageDiv = document.getElementById(messageId);
            messageDiv.style.display = "block";
        }
    </script>

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

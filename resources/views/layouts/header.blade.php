@include('layouts.app')
@include('home.home_layout.appHome')
@include('layouts.appStyles')

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ config('app.url') }}css/style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="{{ config('app.url') }}css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{ config('app.url') }}css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ config('app.url') }}css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ config('app.url') }}css/custom.css">
<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>

<head>
    <style>
        ul li {
            margin-left: 20px;
        }

        .button-50 {
            width: 80px;
            appearance: button;
            background-color: #03001C;
            background-image: none;
            border: 1px solid #820000;
            border-radius: 4px;
            box-shadow: #fff 4px 4px 0 0, #000 4px 4px 0 1px;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: ITCAvantGardeStd-Bk, Arial, sans-serif;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            margin: 0 0 0 0;
            overflow: visible;
            padding: 0;
            text-align: center;
            text-transform: none;
            touch-action: manipulation;
            user-select: none;
            -webkit-user-select: none;
            vertical-align: middle;
            white-space: nowrap;
        }

        .button-50:focus {
            text-decoration: none;
        }

        .button-50:hover {
            text-decoration: none;
        }

        .button-50:active {
            box-shadow: rgba(0, 0, 0, .125) 0 3px 5px inset;
            outline: 0;
        }

        .button-50:not([disabled]):active {
            box-shadow: #fff 2px 2px 0 0, #000 2px 2px 0 1px;
            transform: translate(2px, 2px);
        }

        @media (min-width: 768px) {
            .button-50 {
                padding: 12px 10px;
            }
        }
    </style>
</head>

<header class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: -20px; padding-bottom:30px;">
    <div class="header-top wow fadeIn">
        <div class="container">
            <nav class="main-menu">
                <div class="navbar-header">

                    <button style="width: 20px; height:20px; color:white" class="navbar-toggler" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"
                            style="width: 20px; height:20px; margin-top:-15px; margin-left: -10px; color:white"></span>
                    </button>

                </div>
                <div id="navbarSupportedContent" class="navbar-collapse collapse">
                    <div class="container">
                        <ul class="nav navbar-nav ">



                            <li class="nav-item"><a class="button-50 text-light" href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="nav-item"><a class="button-50 text-light" href="{{ url('/#') }}">Services</a>
                            </li>


                            <li class="nav-item"><a class="button-50 text-light" href="{{ url('#') }}">Doctors</a>
                            </li>


                            <li class="nav-item"><a class="button-50 text-light" href="{{ url('/#') }}">About
                                    us</a></li>


                            <li class="nav-item"><a class="button-50 text-light" href="{{ url('#') }}">Contact</a>
                            </li>




                            <li class="nav-item">
                                <span class=""><i class="fa fa-clock" aria-hidden="true"
                                        style="color:white; margin-top: 10px"></i></span>
                                <span style="margin-right: 80px; padding-left:-10px; color:white"> <span
                                        id="time"></span></span>
                            </li>


                            <li class="nav-item">
                                <span class=""><i class="fa fa-volume-control-phone" aria-hidden="true"
                                        style="color: white"></i></span>
                                <span><a href="tel:" style="color: white">94 761 609 125</a></span>
                            </li>




                            {{-- <li class="nav-item">
                                <div class="dropdown d-inline-block d-flex">
                                    <button type="button" class="btn header-item waves-effect"
                                        id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">


                                        <span class="d-none d-xl-inline-block ms-1"
                                            key="t-henry">{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
                                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">


                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="{{ url('logout') }}"><i
                                                class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                                            <span key="t-logout">Logout</span></a>
                                    </div>
                                </div>

                            </li> --}}

                        </ul>


                    </div>

                </div>
            </nav>
        </div>
    </div>
</header>

<script>
    function refreshTime() {
        const timeDisplay = document.getElementById("time");
        const dateString = new Date().toLocaleString();
        const formattedString = dateString.replace(", ", " - ");
        timeDisplay.textContent = formattedString;
    }
    setInterval(refreshTime, 1000);
</script>

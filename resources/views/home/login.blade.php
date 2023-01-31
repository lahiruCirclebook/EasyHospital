<link rel="stylesheet" href="{{ asset('public/home_assets/css/login.css') }}">

<head>

</head>

<style>
    .context h1 {
        text-align: center;
        color: #fff;
        font-size: 50px;
    }

    .circles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .circles li {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -150px;

    }

    .circles li:nth-child(1) {
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
    }


    .circles li:nth-child(2) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
    }

    .circles li:nth-child(3) {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
    }

    .circles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
    }

    .circles li:nth-child(5) {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }

    .circles li:nth-child(6) {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
    }

    .circles li:nth-child(7) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
    }

    .circles li:nth-child(8) {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
    }

    .circles li:nth-child(9) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
    }

    .circles li:nth-child(10) {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
    }

    @keyframes animate {

        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }

        100% {
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }

    }
</style>


@include('home.home_layout.appHome')




<body>
    <div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-9 col-md-8 col-sm-6 col-12">
                    <div class="auth-full-bg pt-lg-5 p-4"
                        style="background-image: url('assets/images/layouts/medical1.jpg');background-size: cover;height: 100vh;opacity: 0.8;">
                        <div class="w-100">
                            <div class="area">
                                <ul class="circles">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3 col-md-4 col-sm-6 col-12 ">
                    <div class="auth-full-page-content">
                        <div class="w-100">

                            <div>
                                <div>
                                    <div class="d-flex justify-content-center pt-3">
                                        <img src="assets/images/layouts/medical6.jpg" alt="" width="200">
                                    </div>
                                    <p class="text-muted mt-3" style="text-align: center;font-weight: 600;">Sign in
                                        to continue with Easy-Hospital</p>
                                </div>

                                <div class="my-auto">

                                    @if ($errors->any())
                                        <div class="container">
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first() }}
                                            </div>
                                        </div>
                                    @endif


                                    <div class="pt-4 pr-2">
                                        <form action="{{ url('/login') }}" method="post" enctype="multipart/form-data"
                                            id="regForm">
                                            {{ csrf_field() }}

                                            <div class="mb-3">
                                                <label for="username" class="form-label"
                                                    style="font-weight: bold;">Username/Email</label>
                                                <input type="email" id="email" name="email" placeholder="Email"
                                                    class="form-control" style="text-align: left;">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" style="font-weight: bold;">Password</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control"
                                                        placeholder="Enter password" aria-label="Password"
                                                        aria-describedby="password-addon" name="password"
                                                        id="password">
                                                    <button class="btn " onclick="toggle()" type="button"
                                                        id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>



                                            <div class="">
                                                <center><br>
                                                    <button class="btn btn-dark waves-effect waves-light"
                                                        type="submit">Log
                                                        In</button>

                                                    <a class="btn btn-danger waves-effect waves-light"
                                                        href="{{ url('/register') }}">To Register</a>
                                                </center>
                                            </div>
                                        </form>


                                    </div>
                                </div>


                                <center>

                                    <div class="">
                                        <div class="mt-5 mb-0 text-center" style="position:relative; width: 80%;">
                                            <p>©
                                                <script>
                                                    document.write(new Date().getFullYear())
                                                </script>&nbsp; <img
                                                    src="assets/images/layouts/medical6.jpg" alt=""
                                                    height="50">
                                                E - Rats
                                        </div>
                                    </div>

                                </center>

                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>


    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon

        });
    </script>
    <script>
        var state = false;

        function toggle() {
            if (state) {
                document.getElementById("password").setAttribute("type", "password");
                state = false;
            } else {
                document.getElementById("password").setAttribute("type", "text");
                state = true;
            }
        }
    </script>

</body>

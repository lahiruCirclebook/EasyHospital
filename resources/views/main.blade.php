@php
    $id = session('id');
    $role = session('role');
@endphp
@if (!empty($id))
    @include('layouts.app')

    @include('layouts.appStyles')

    <head>
        <style>
            {
                box-sizing: border-box;
                padding: 0;
                margin: 0;
                outline: none;
            }



            h1 {
                font-size: 90px;
                white-space: nowrap;
                overflow: hidden;
                animation: typewriter 2s steps(13) infinite alternate,
                    blink 800ms steps(13) infinite normal;
                border-right: 5px solid black;
            }

            @keyframes typewriter {
                from {
                    width: 0%;
                }

                to {
                    width: 50%;
                }
            }

            @keyframes blink {
                from {
                    border-color: black;
                }

                to {
                    border-color: transparent;
                }
            }
        </style>

    </head>

    <body
        style="background-image: url('assets/images/layouts/darkskeleton.jpg'); background-size: cover; height: 100vh; opacity:0.8">
        <div class="wrapper ">
            <div class="main-panel">
                @include('layouts.header')
                <div class="content">
                    <div class="container">

                        <div class="row mt-4">
                            <div class="col-md-12 col-sm-12">
                                <div class="text-contant">
                                    <div>
                                        <center>
                                            <h1 style="color: white">THE GOST...</h1>
                                        </center>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- time table --}}
                        <div class="row mt-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                        <div class="card" style="opacity: 0.8">
                                            <div class="card-body">
                                                <span class="info-icon"><i class="fa fa-ambulance"
                                                        aria-hidden="true"></i></span>
                                                <h3>Contact The Gost</h3>
                                                <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti
                                                    atque
                                                    cori
                                                    as quos dolores et quas mole.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                        <div class="card" style="opacity: 0.8">
                                            <div class="card-body">
                                                <span class="info-icon"><i class="fa fa-ambulance"
                                                        aria-hidden="true"></i></span>
                                                <h3>Look Up The Gost</h3>
                                                <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti
                                                    atque
                                                    cori
                                                    as quos dolores et quas mole.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                                        <div class="card" style="opacity: 0.8">
                                            <div class="card-body">
                                                <span class="info-icon"><i class="fa fa-ambulance"
                                                        aria-hidden="true"></i></span>
                                                <h3>Live With Gost</h3>
                                                <p>Dignissimos ducimus qui blanditii sentium volta tum deleniti
                                                    atque
                                                    cori
                                                    as quos dolores et quas mole.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br><br>
                @include('layouts.footer')
            </div>
        </div>
    </body>

    </html>
@else
    @include('layouts.noUser')
@endif
